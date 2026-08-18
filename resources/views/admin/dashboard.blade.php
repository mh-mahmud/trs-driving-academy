@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('content')
<div class="page-heading d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4"><div><h1>Dashboard</h1><p>Overview of your academy, students, and recent activity.</p></div><button class="btn btn-light border"><i class="bi bi-arrow-clockwise me-2"></i>Refresh</button></div>
<section class="welcome-banner mb-4"><div><span>Good {{ now()->hour < 12 ? 'morning' : (now()->hour < 17 ? 'afternoon' : 'evening') }},</span><h2>{{ auth()->user()->name }} 👋</h2><p>Here’s what’s happening across Pathway today.</p><div class="online-copy"><i class="bi bi-circle-fill"></i> System running smoothly</div></div><div class="banner-icon d-none d-md-flex"><i class="bi bi-car-front-fill"></i></div></section>
<div class="row g-3 mb-4">
    @foreach([['Students',$enrollmentCount,'bi-people','blue'],['Active Courses',$activeCourseCount,'bi-journal-check','green'],['New Enrollments',$enrollmentCount,'bi-person-plus','purple'],['Pending Enrollments',$pendingEnrollmentCount,'bi-hourglass-split','orange']] as [$label,$value,$icon,$color])
    <div class="col-12 col-sm-6 col-xl-3"><div class="stat-card {{ $color }}"><div class="stat-icon"><i class="bi {{ $icon }}"></i></div><span>{{ $label }}</span><strong>{{ $value }}</strong><small><i class="bi bi-graph-up-arrow"></i> 12% this month</small></div></div>
    @endforeach
</div>
<div class="row g-4 mb-4">
    <div class="col-xl-7"><div class="panel h-100"><div class="panel-head"><div><h3>Enrollment Overview</h3><p>Last 7 months</p></div><span class="badge text-bg-light">2026</span></div><div class="chart-bars">@foreach([48,66,54,82,62,91,76] as $i=>$height)<div><span style="height:{{ $height }}%"></span><small>{{ ['Feb','Mar','Apr','May','Jun','Jul','Aug'][$i] }}</small></div>@endforeach</div></div></div>
    <div class="col-xl-5"><div class="panel h-100"><div class="panel-head"><div><h3>Course Categories</h3><p>Distribution by enrollment</p></div></div><div class="donut-wrap"><div class="donut"><span>1,380<small>Total</small></span></div><ul class="chart-legend"><li><i class="green-dot"></i>Car Driving <strong>52%</strong></li><li><i class="blue-dot"></i>Bike Training <strong>28%</strong></li><li><i class="orange-dot"></i>Theory <strong>20%</strong></li></ul></div></div></div>
</div>
<div class="row g-4">
    <div class="col-lg-7"><div class="panel"><div class="panel-head"><div><h3>Recent Enrollments</h3><p>Latest student applications</p></div><a href="{{ route('admin.enrollments.index') }}">View all</a></div><div class="table-responsive"><table class="table align-middle mb-0"><thead><tr><th>Student</th><th>Course</th><th>Date</th><th>Status</th></tr></thead><tbody>@forelse($recentEnrollments as $item)<tr><td><a class="student-cell text-decoration-none" href="{{ route('admin.enrollments.show',$item) }}"><span>{{ strtoupper(substr($item->name,0,1)) }}</span><strong>{{ $item->name }}</strong></a></td><td>{{ $item->course?->title }}</td><td>{{ $item->created_at->diffForHumans() }}</td><td><span class="status-pill">{{ ucfirst($item->status) }}</span></td></tr>@empty<tr><td colspan="4" class="text-center py-4 text-secondary">No enrollment submitted yet.</td></tr>@endforelse</tbody></table></div></div></div>
    <div class="col-lg-5"><div class="panel"><div class="panel-head"><div><h3>Quick Actions</h3><p>Common admin tasks</p></div></div><div class="quick-grid"><a href="#"><i class="bi bi-person-plus"></i><span>Add Student</span></a><a href="#"><i class="bi bi-journal-plus"></i><span>Add Course</span></a><a href="#"><i class="bi bi-pencil-square"></i><span>Write Blog</span></a><a href="{{ route('admin.profile.edit') }}"><i class="bi bi-person-gear"></i><span>Edit Profile</span></a></div></div></div>
</div>
@endsection
