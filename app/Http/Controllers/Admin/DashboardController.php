<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Course,OfflineEnrollment};
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard',['enrollmentCount'=>OfflineEnrollment::count(),'pendingEnrollmentCount'=>OfflineEnrollment::where('status','pending')->count(),'activeCourseCount'=>Course::where('is_active',true)->count(),'recentEnrollments'=>OfflineEnrollment::with('course')->latest()->limit(5)->get()]);
    }
}
