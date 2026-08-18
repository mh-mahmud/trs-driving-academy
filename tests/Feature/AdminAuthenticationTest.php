<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\NavigationItem;
use App\Models\SiteSetting;
use App\Models\Branch;
use App\Models\City;
use App\Models\CourseType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    private function useProjectDatabase(): void
    {
        config([
            'database.default' => 'mysql',
            'database.connections.mysql.database' => 'driving_academy',
            'session.driver' => 'array',
        ]);
        DB::purge('mysql');
    }

    public function test_guest_can_see_admin_login_and_protected_pages_redirect(): void
    {
        $this->get('/admin/login')->assertOk();
        $this->get('/admin/dashboard')->assertRedirect('/admin/login');
    }

    public function test_super_admin_can_login_view_profile_and_logout(): void
    {
        $this->useProjectDatabase();

        $admin = User::where('email', 'superadmin@gmail.com')->firstOrFail();

        $this->assertTrue(Hash::check('12345678', $admin->password));

        $this->post('/admin/login', [
            'email' => 'superadmin@gmail.com',
            'password' => '12345678',
        ])->assertRedirect('/admin/dashboard');

        $this->assertAuthenticatedAs($admin);
        $this->get('/admin/dashboard')->assertOk();
        $this->get('/admin/profile')->assertOk();
        $this->put('/admin/profile', [
            'name' => $admin->name,
            'email' => $admin->email,
        ])->assertSessionHas('status');
        $this->post('/admin/logout')->assertRedirect('/admin/login');
        $this->assertGuest();
    }

    public function test_super_admin_can_manage_header_footer_and_navigation(): void
    {
        $this->useProjectDatabase();
        $admin = User::where('email', 'superadmin@gmail.com')->firstOrFail();
        $settings = SiteSetting::firstOrFail();
        $menus = NavigationItem::whereNull('parent_id')->with('children')->orderBy('sort_order')->get()
            ->map(fn ($menu) => [
                'label' => $menu->label,
                'url' => $menu->url,
                'children' => $menu->children->map(fn ($child) => ['label' => $child->label, 'url' => $child->url])->all(),
            ])->all();

        $this->actingAs($admin)->get('/admin/home/header-footer')->assertOk();
        $this->actingAs($admin)->put('/admin/home/header-footer', [
            'footer_about' => $settings->footer_about,
            'office_title' => $settings->office_title,
            'office_hours' => $settings->office_hours,
            'office_days' => $settings->office_days,
            'office_note' => $settings->office_note,
            'address' => $settings->address,
            'email' => $settings->email,
            'phone' => $settings->phone,
            'floating_phone' => $settings->floating_phone,
            'whatsapp_number' => $settings->whatsapp_number,
            'facebook' => $settings->facebook,
            'linkedin' => $settings->linkedin,
            'youtube' => $settings->youtube,
            'instagram' => $settings->instagram,
            'registration_text' => $settings->registration_text,
            'copyright_text' => $settings->copyright_text,
            'menus' => $menus,
        ])->assertSessionHas('status');

        $this->get('/')->assertOk()->assertSee($settings->footer_about);
    }

    public function test_super_admin_can_view_course_management_and_create_course(): void
    {
        $this->useProjectDatabase();
        $admin = User::where('email', 'superadmin@gmail.com')->firstOrFail();
        $type = CourseType::firstOrFail();
        $city = City::firstOrFail();
        $branch = Branch::where('city_id', $city->id)->firstOrFail();

        foreach (['/admin/courses', '/admin/courses/create', '/admin/courses/options/types', '/admin/courses/options/cities', '/admin/courses/options/branches'] as $uri) {
            $this->actingAs($admin)->get($uri)->assertOk();
        }

        $title = 'Test Course '.uniqid();
        $this->actingAs($admin)->post('/admin/courses', [
            'title' => $title,
            'course_type_id' => $type->id,
            'city_id' => $city->id,
            'branch_id' => $branch->id,
            'fee' => 5000,
            'duration' => '30 Days',
            'is_active' => 1,
        ])->assertRedirect('/admin/courses');

        $this->assertDatabaseHas('courses', ['title' => $title]);
        \App\Models\Course::where('title', $title)->delete();
    }

    public function test_duplicate_course_titles_generate_unique_slugs(): void
    {
        $this->useProjectDatabase();
        $admin = User::where('email', 'superadmin@gmail.com')->firstOrFail();
        $type = CourseType::firstOrFail(); $city = City::firstOrFail(); $branch = Branch::where('city_id', $city->id)->firstOrFail();
        $title = 'Unique Slug Test '.uniqid();
        $payload = ['title'=>$title,'course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>1000,'description'=>'<p>Rich description</p>','is_active'=>1];

        $this->actingAs($admin)->post('/admin/courses', $payload)->assertRedirect('/admin/courses');
        $this->actingAs($admin)->post('/admin/courses', $payload)->assertRedirect('/admin/courses');

        $courses = \App\Models\Course::where('title', $title)->orderBy('id')->get();
        $this->assertCount(2, $courses);
        $this->assertNotSame($courses[0]->slug, $courses[1]->slug);
        $this->assertStringEndsWith('-2', $courses[1]->slug);
        \App\Models\Course::where('title', $title)->delete();
    }

    public function test_super_admin_can_edit_and_delete_a_course(): void
    {
        $this->useProjectDatabase();
        $admin = User::where('email', 'superadmin@gmail.com')->firstOrFail();
        $type = CourseType::firstOrFail(); $city = City::firstOrFail(); $branch = Branch::where('city_id', $city->id)->firstOrFail();
        $course = \App\Models\Course::create(['title'=>'Editable Test Course','slug'=>'editable-test-course-'.uniqid(),'course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>1000,'is_active'=>true]);

        $this->actingAs($admin)->get("/admin/courses/{$course->id}/edit")->assertOk();
        $this->actingAs($admin)->put("/admin/courses/{$course->id}", ['title'=>'Updated Test Course','course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>1500,'description'=>'<p>Updated</p>','is_active'=>1])->assertRedirect('/admin/courses');
        $this->assertDatabaseHas('courses',['id'=>$course->id,'title'=>'Updated Test Course','fee'=>1500]);
        $this->actingAs($admin)->delete("/admin/courses/{$course->id}")->assertRedirect();
        $this->assertDatabaseMissing('courses',['id'=>$course->id]);
    }

    public function test_super_admin_can_create_edit_and_delete_blog(): void
    {
        $this->useProjectDatabase();
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $category=\App\Models\BlogCategory::firstOrFail();
        $title='Blog CRUD Test '.uniqid();
        $this->actingAs($admin)->get('/admin/blogs/create')->assertOk();
        $this->actingAs($admin)->get('/admin/blog-categories')->assertOk();
        $this->actingAs($admin)->post('/admin/blogs',['title'=>$title,'blog_category_id'=>$category->id,'description'=>'<p>Body</p>','status'=>'published'])->assertRedirect('/admin/blogs');
        $blog=\App\Models\Blog::where('title',$title)->firstOrFail();
        $this->assertNotNull($blog->published_at);
        $this->actingAs($admin)->put("/admin/blogs/{$blog->id}",['title'=>$title.' Updated','blog_category_id'=>$category->id,'description'=>'<p>Updated</p>','status'=>'draft'])->assertRedirect('/admin/blogs');
        $this->assertDatabaseHas('blogs',['id'=>$blog->id,'status'=>'draft']);
        $this->actingAs($admin)->delete("/admin/blogs/{$blog->id}")->assertRedirect();
        $this->assertDatabaseMissing('blogs',['id'=>$blog->id]);
    }

    public function test_super_admin_can_manage_gallery_images(): void
    {
        $this->useProjectDatabase(); Storage::fake('public');
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $this->actingAs($admin)->get('/admin/gallery')->assertOk();
        $png=base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII=');
        $this->actingAs($admin)->post('/admin/gallery',['title'=>'Gallery Test','image'=>UploadedFile::fake()->createWithContent('gallery.png',$png),'sort_order'=>2,'is_active'=>1])->assertRedirect();
        $gallery=\App\Models\Gallery::where('title','Gallery Test')->firstOrFail(); Storage::disk('public')->assertExists($gallery->image);
        $this->actingAs($admin)->put("/admin/gallery/{$gallery->id}",['title'=>'Gallery Updated','sort_order'=>1])->assertRedirect();
        $this->assertDatabaseHas('galleries',['id'=>$gallery->id,'title'=>'Gallery Updated','is_active'=>false]);
        $this->actingAs($admin)->delete("/admin/gallery/{$gallery->id}")->assertRedirect();
        $this->assertDatabaseMissing('galleries',['id'=>$gallery->id]);
    }

    public function test_super_admin_can_manage_youtube_videos(): void
    {
        $this->useProjectDatabase();
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $this->actingAs($admin)->get('/admin/videos')->assertOk();
        $this->actingAs($admin)->post('/admin/videos',['title'=>'Video Test','youtube_url'=>'https://www.youtube.com/watch?v=dQw4w9WgXcQ','description'=>'Video description','sort_order'=>2,'is_active'=>1])->assertRedirect();
        $video=\App\Models\Video::where('title','Video Test')->firstOrFail();
        $this->assertSame('dQw4w9WgXcQ',$video->youtube_id);
        $this->actingAs($admin)->put("/admin/videos/{$video->id}",['title'=>'Video Updated','youtube_url'=>'https://youtu.be/dQw4w9WgXcQ','description'=>'Updated description','sort_order'=>1])->assertRedirect();
        $this->assertDatabaseHas('videos',['id'=>$video->id,'title'=>'Video Updated','is_active'=>false]);
        $this->actingAs($admin)->delete("/admin/videos/{$video->id}")->assertRedirect();
        $this->assertDatabaseMissing('videos',['id'=>$video->id]);
    }

    public function test_certification_section_is_dynamic(): void
    {
        $this->useProjectDatabase(); Storage::fake('public');
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $this->actingAs($admin)->get('/admin/certifications')->assertOk();
        $png=base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII=');
        $this->actingAs($admin)->post('/admin/certifications',['name'=>'Test Certification','image'=>UploadedFile::fake()->createWithContent('logo.png',$png),'sort_order'=>99,'is_active'=>1])->assertRedirect();
        $cert=\App\Models\Certification::where('name','Test Certification')->firstOrFail();
        $this->get('/')->assertOk()->assertSee('Test Certification');
        $this->actingAs($admin)->put("/admin/certifications/{$cert->id}",['name'=>'Hidden Certification','sort_order'=>99])->assertRedirect();
        $this->get('/')->assertDontSee('Hidden Certification');
        $this->actingAs($admin)->delete("/admin/certifications/{$cert->id}")->assertRedirect();
    }

    public function test_home_courses_section_uses_active_database_courses(): void
    {
        $this->useProjectDatabase();
        $type=CourseType::firstOrFail();$city=City::firstOrFail();$branch=Branch::where('city_id',$city->id)->firstOrFail();
        $active=\App\Models\Course::create(['title'=>'Visible Home Course','slug'=>'visible-home-course-'.uniqid(),'course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>7250,'duration'=>'20 Days','is_active'=>true]);
        $inactive=\App\Models\Course::create(['title'=>'Hidden Home Course','slug'=>'hidden-home-course-'.uniqid(),'course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>5000,'is_active'=>false]);
        $this->get('/')->assertOk()->assertSee('Visible Home Course')->assertSee('BDT 7,250')->assertDontSee('Hidden Home Course');
        $active->delete();$inactive->delete();
    }

    public function test_public_course_catalog_is_dynamic_and_filterable(): void
    {
        $this->useProjectDatabase();
        $type=CourseType::firstOrFail();$otherType=CourseType::whereKeyNot($type->id)->firstOrFail();$city=City::firstOrFail();$branch=Branch::where('city_id',$city->id)->firstOrFail();
        $course=\App\Models\Course::create(['title'=>'Catalog Filter Test','slug'=>'catalog-filter-test-'.uniqid(),'course_type_id'=>$type->id,'city_id'=>$city->id,'branch_id'=>$branch->id,'fee'=>4321,'duration'=>'15 Days','is_active'=>true]);
        $this->get('/courses')->assertOk()->assertSee('Catalog Filter Test')->assertSee('BDT 4,321');
        $this->get('/courses?course_type_id='.$otherType->id)->assertOk()->assertDontSee('Catalog Filter Test');
        $course->delete();
    }

    public function test_courses_page_faq_is_dynamic(): void
    {
        $this->useProjectDatabase();
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $this->actingAs($admin)->post('/admin/faqs',['question'=>'Dynamic FAQ Test?','answer'=>'Dynamic FAQ Answer','sort_order'=>99,'is_active'=>1])->assertRedirect();
        $faq=\App\Models\Faq::where('question','Dynamic FAQ Test?')->firstOrFail();
        $this->get('/courses')->assertSee('Dynamic FAQ Test?')->assertSee('Dynamic FAQ Answer');
        $this->actingAs($admin)->put("/admin/faqs/{$faq->id}",['question'=>'Hidden FAQ Test?','answer'=>'Hidden Answer','sort_order'=>99])->assertRedirect();
        $this->get('/courses')->assertDontSee('Hidden FAQ Test?');
        $this->actingAs($admin)->delete("/admin/faqs/{$faq->id}")->assertRedirect();
    }

    public function test_published_blogs_are_dynamic_on_home_and_blog_pages(): void
    {
        $this->useProjectDatabase();
        $category=\App\Models\BlogCategory::firstOrFail();
        $published=\App\Models\Blog::create(['blog_category_id'=>$category->id,'title'=>'Visible Public Blog','slug'=>'visible-public-blog-'.uniqid(),'description'=>'<p>Published body content</p>','status'=>'published','published_at'=>now()]);
        $draft=\App\Models\Blog::create(['blog_category_id'=>$category->id,'title'=>'Hidden Draft Blog','slug'=>'hidden-draft-blog-'.uniqid(),'description'=>'<p>Draft content</p>','status'=>'draft']);
        $this->get('/')->assertOk()->assertSee('Visible Public Blog')->assertDontSee('Hidden Draft Blog');
        $this->get('/blogs')->assertOk()->assertSee('Visible Public Blog')->assertDontSee('Hidden Draft Blog');
        $this->get('/blogs/'.$published->slug)->assertOk()->assertSee('Published body content');
        $this->get('/blogs/'.$draft->slug)->assertNotFound();
        $published->delete();$draft->delete();
    }

    public function test_home_hero_content_is_dynamic(): void
    {
        $this->useProjectDatabase();
        $admin=User::where('email','superadmin@gmail.com')->firstOrFail();
        $settings=SiteSetting::firstOrFail();
        $payload=['hero_subtitle'=>'Dynamic Hero Badge','hero_title'=>'Dynamic Hero Title','hero_description'=>'Dynamic hero description','hero_primary_text'=>'Join Now','hero_primary_url'=>'/register','hero_secondary_text'=>'Browse Courses','hero_secondary_url'=>'/courses','hero_success_title'=>'6,000+ Stories','hero_success_text'=>'Growing every day','hero_badges'=>$settings->hero_badges,'hero_stats'=>$settings->hero_stats];
        $this->actingAs($admin)->put('/admin/home/hero',$payload)->assertSessionHas('status');
        $this->get('/')->assertOk()->assertSee('Dynamic Hero Title')->assertSee('Dynamic hero description')->assertSee('6,000+ Stories');
        $settings->update(['hero_subtitle'=>'Under experienced instructors','hero_title'=>'Welcome to PATHWAY Driving Training School','hero_description'=>'We ensure the planned training modules and the safety of the trainees','hero_primary_text'=>'Get Started','hero_success_title'=>'5,000+ Success Stories','hero_success_text'=>'Join our growing community today']);
    }
}
