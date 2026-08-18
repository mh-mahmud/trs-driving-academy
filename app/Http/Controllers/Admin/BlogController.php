<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
class BlogController extends Controller {
 public function index():View{return view('admin.blogs.index',['blogs'=>Blog::with('category')->latest()->paginate(15)]);}
 public function create():View{return view('admin.blogs.form',['blog'=>new Blog,'categories'=>$this->categories()]);}
 public function store(Request $r):RedirectResponse{$data=$this->validated($r);$data['slug']=$this->slug($data['title']);$data=$this->filesAndStatus($r,$data);Blog::create($data);return redirect()->route('admin.blogs.index')->with('status','Blog created successfully.');}
 public function edit(Blog $blog):View{return view('admin.blogs.form',['blog'=>$blog,'categories'=>$this->categories()]);}
 public function update(Request $r,Blog $blog):RedirectResponse{$data=$this->validated($r);if($blog->title!==$data['title'])$data['slug']=$this->slug($data['title'],$blog);$data=$this->filesAndStatus($r,$data,$blog);$blog->update($data);return redirect()->route('admin.blogs.index')->with('status','Blog updated successfully.');}
 public function destroy(Blog $blog):RedirectResponse{if($blog->image)Storage::disk('public')->delete($blog->image);$blog->delete();return back()->with('status','Blog deleted successfully.');}
 public function upload(Request $r):JsonResponse{$r->validate(['upload'=>['required','image','max:4096']]);$path=$r->file('upload')->store('blogs/content','public');return response()->json(['url'=>asset('storage/'.$path)]);}
 private function validated(Request $r):array{return $r->validate(['title'=>['required','string','max:255'],'blog_category_id'=>['required','exists:blog_categories,id'],'description'=>['nullable','string'],'image'=>['nullable','image','max:4096'],'status'=>['required','in:draft,published']]);}
 private function filesAndStatus(Request $r,array $data,?Blog $blog=null):array{if($r->hasFile('image')){if($blog?->image)Storage::disk('public')->delete($blog->image);$data['image']=$r->file('image')->store('blogs/featured','public');}$data['published_at']=$data['status']==='published'?($blog?->published_at??now()):null;return $data;}
 private function categories(){return BlogCategory::where('is_active',true)->orderBy('name')->get();}
 private function slug(string $title,?Blog $ignore=null):string{$base=Str::slug($title)?:'blog';$slug=$base;$i=2;while(Blog::where('slug',$slug)->when($ignore,fn($q)=>$q->whereKeyNot($ignore->id))->exists())$slug=$base.'-'.$i++;return $slug;}
}
