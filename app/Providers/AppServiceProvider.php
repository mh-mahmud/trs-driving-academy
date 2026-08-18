<?php

namespace App\Providers;

use App\Models\NavigationItem;
use App\Models\SiteSetting;
use App\Models\Certification;
use App\Models\Course;
use App\Models\Blog;
use App\Models\WhyChooseItem;
use App\Models\AchievementStat;
use App\Models\Testimonial;
use App\Models\Video;
use App\Models\Gallery;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view): void {
            try {
                $settings = SiteSetting::first();
                $navigation = NavigationItem::whereNull('parent_id')->where('is_active', true)
                    ->with('children')->orderBy('sort_order')->get();
            } catch (Throwable) {
                $settings = null;
                $navigation = collect();
            }

            $view->with('siteSettings', $settings)->with('navigation', $navigation);
        });
        View::composer('pages.home', function ($view): void {
            try {
                $view->with('certificationSettings', SiteSetting::first())
                    ->with('heroSettings', SiteSetting::first())
                    ->with('certifications', Certification::where('is_active', true)->orderBy('sort_order')->get())
                    ->with('homeCourses', Course::where('is_active', true)->with('type')->latest()->limit(8)->get())
                    ->with('homeBlogs', Blog::where('status', 'published')->with('category')->latest('published_at')->limit(6)->get());
                $view->with('homeCourseTypes', \App\Models\CourseType::where('is_active', true)->orderBy('name')->get());
                $view->with('whyChooseItems', WhyChooseItem::where('is_active', true)->orderBy('sort_order')->get());
                $view->with('achievementStats', AchievementStat::where('is_active', true)->orderBy('sort_order')->get());
                $view->with('homeTestimonials', Testimonial::where('is_active', true)->orderBy('sort_order')->get());
                $view->with('homeVideos', Video::where('is_active', true)->orderBy('sort_order')->latest('id')->limit(6)->get());
                $view->with('homeGallery', Gallery::where('is_active', true)->orderBy('sort_order')->latest('id')->limit(6)->get());
            } catch (Throwable) {
                $view->with('certificationSettings', null)
                    ->with('heroSettings', null)
                    ->with('certifications', collect())
                    ->with('homeCourses', collect())
                    ->with('homeBlogs', collect())
                    ->with('homeCourseTypes', collect());
                $view->with('whyChooseItems', collect());
                $view->with('achievementStats', collect());
                $view->with('homeTestimonials', collect());
                $view->with('homeVideos', collect());
                $view->with('homeGallery', collect());
            }
        });
    }
}
