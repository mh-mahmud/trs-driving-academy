<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title')@yield('title') | {{ config('app.name') }}@else{{ config('app.name') }}@endif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">
</head>
<body class="admin-body">
    <aside class="admin-sidebar offcanvas-lg offcanvas-start" tabindex="-1" id="adminSidebar">
        <div class="offcanvas-header d-lg-none">
            <a class="brand" href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#adminSidebar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column p-0">
            <a class="brand d-none d-lg-flex" href="{{ route('admin.dashboard') }}">
                <span class="brand-mark">{{ strtoupper(substr(config('app.name'),0,1)) }}</span> {{ config('app.name') }}
            </a>
            <div class="px-3 pb-3">
                <div class="input-group sidebar-search">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input class="form-control" placeholder="Search menu...">
                </div>
            </div>
            <nav class="sidebar-nav px-3">
                <small>OVERVIEW</small>
                <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="bi bi-grid"></i> Dashboard</a>
                <a href="#"><i class="bi bi-calendar3"></i> Calendar</a>
                <a class="{{ request()->routeIs('admin.home.*','admin.certifications.*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#homeMenu" role="button" aria-expanded="{{ request()->routeIs('admin.home.*','admin.certifications.*') ? 'true' : 'false' }}"><i class="bi bi-house-door"></i> Home <i class="bi bi-chevron-down ms-auto"></i></a>
                <div class="collapse {{ request()->routeIs('admin.home.*','admin.certifications.*') ? 'show' : '' }} sidebar-submenu" id="homeMenu">
                    <a class="{{ request()->routeIs('admin.home.hero.*') ? 'active' : '' }}" href="{{ route('admin.home.hero.edit') }}"><i class="bi bi-card-image"></i> Hero Section</a>
                    <a class="{{ request()->routeIs('admin.home.master-skills.*') ? 'active' : '' }}" href="{{ route('admin.home.master-skills.edit') }}"><i class="bi bi-stars"></i> Master Skills</a>
                    <a class="{{ request()->routeIs('admin.home.why-choose.*') ? 'active' : '' }}" href="{{ route('admin.home.why-choose.index') }}"><i class="bi bi-ui-checks-grid"></i> Why Choose Us</a>
                    <a class="{{ request()->routeIs('admin.home.achievements.*') ? 'active' : '' }}" href="{{ route('admin.home.achievements.index') }}"><i class="bi bi-bar-chart"></i> Achievements</a>
                    <a class="{{ request()->routeIs('admin.home.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.home.testimonials.index') }}"><i class="bi bi-chat-quote"></i> Testimonials</a>
                    <a class="{{ request()->routeIs('admin.home.header-footer.*') ? 'active' : '' }}" href="{{ route('admin.home.header-footer.edit') }}"><i class="bi bi-layout-text-window"></i> Header and Footer</a>
                    <a class="{{ request()->routeIs('admin.certifications.*') ? 'active' : '' }}" href="{{ route('admin.certifications.index') }}"><i class="bi bi-patch-check"></i> Certifications</a>
                </div>
                <a class="{{ request()->routeIs('admin.about.*') ? 'active' : '' }}" href="{{ route('admin.about.edit') }}"><i class="bi bi-info-circle"></i> About Page</a>
                <small>MANAGEMENT</small>
                <a href="#"><i class="bi bi-people"></i> Students</a>
                <a class="{{ request()->routeIs('admin.courses.*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#coursesMenu" role="button" aria-expanded="{{ request()->routeIs('admin.courses.*') ? 'true' : 'false' }}"><i class="bi bi-journal-bookmark"></i> Courses <i class="bi bi-chevron-down ms-auto"></i></a>
                <div class="collapse {{ request()->routeIs('admin.courses.*') ? 'show' : '' }} sidebar-submenu" id="coursesMenu">
                    <a href="{{ route('admin.courses.create') }}"><i class="bi bi-plus-circle"></i> Add Course</a>
                    <a href="{{ route('admin.courses.index') }}"><i class="bi bi-list-ul"></i> Course List</a>
                    <a href="{{ route('admin.courses.options.index','types') }}"><i class="bi bi-tags"></i> Course Type</a>
                    <a href="{{ route('admin.courses.options.index','cities') }}"><i class="bi bi-geo-alt"></i> District / City</a>
                    <a href="{{ route('admin.courses.options.index','branches') }}"><i class="bi bi-building"></i> Branch</a>
                    <a href="{{ route('admin.theory-courses.create') }}"><i class="bi bi-plus-circle"></i> Add Theory Course</a>
                    <a href="{{ route('admin.theory-courses.index') }}"><i class="bi bi-list-ul"></i> Theory Course List</a>
                </div>
                <a href="#"><i class="bi bi-person-video3"></i> Instructors</a>
                <a class="{{ request()->routeIs('admin.enrollments.*') ? 'active' : '' }}" href="{{ route('admin.enrollments.index') }}"><i class="bi bi-receipt"></i> Enrollments</a>
                <small>CONTENT</small>
                <a class="{{ request()->routeIs('admin.blogs.*','admin.blog-categories.*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#blogsMenu" aria-expanded="{{ request()->routeIs('admin.blogs.*','admin.blog-categories.*') ? 'true' : 'false' }}"><i class="bi bi-newspaper"></i> Blogs <i class="bi bi-chevron-down ms-auto"></i></a>
                <div class="collapse {{ request()->routeIs('admin.blogs.*','admin.blog-categories.*') ? 'show' : '' }} sidebar-submenu" id="blogsMenu">
                    <a href="{{ route('admin.blogs.create') }}"><i class="bi bi-plus-circle"></i> Create Blog</a>
                    <a href="{{ route('admin.blogs.index') }}"><i class="bi bi-list-ul"></i> Blog List</a>
                    <a href="{{ route('admin.blog-categories.index') }}"><i class="bi bi-tags"></i> Category</a>
                </div>
                <a class="{{ request()->routeIs('admin.media.*') ? 'active' : '' }}" href="{{ route('admin.media.index') }}"><i class="bi bi-broadcast"></i> Media</a>
                <a class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}" href="{{ route('admin.gallery.index') }}"><i class="bi bi-image"></i> Gallery</a>
                <a class="{{ request()->routeIs('admin.videos.*') ? 'active' : '' }}" href="{{ route('admin.videos.index') }}"><i class="bi bi-play-btn"></i> Videos</a>
                <a class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}" href="{{ route('admin.faqs.index') }}"><i class="bi bi-question-circle"></i> FAQs</a>
                <a class="{{ request()->routeIs('admin.contact.*') ? 'active' : '' }}" href="{{ route('admin.contact.edit') }}"><i class="bi bi-telephone"></i> Contact Page</a>
                <a class="{{ request()->routeIs('admin.contact.messages*') ? 'active' : '' }}" href="{{ route('admin.contact.messages') }}"><i class="bi bi-envelope"></i> Messages</a>
                <small>SETTINGS</small>
                <a class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}" href="{{ route('admin.profile.edit') }}"><i class="bi bi-person-gear"></i> My Profile</a>
            </nav>
            <div class="mt-auto p-3">
                <div class="help-card"><i class="bi bi-headset"></i><div><strong>Need help?</strong><small>Contact support</small></div></div>
            </div>
        </div>
    </aside>

    <div class="admin-shell">
        <header class="admin-topbar navbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn icon-btn sidebar-toggle" id="sidebarToggle" type="button" aria-label="Show or hide menu" aria-controls="adminSidebar"><i class="bi bi-layout-sidebar fs-5"></i></button>
                <span class="fw-semibold d-none d-sm-inline">@yield('page_title', 'Dashboard')</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="btn icon-btn" id="themeToggle" aria-label="Toggle theme"><i class="bi bi-moon"></i></button>
                <div class="dropdown">
                    <button class="btn profile-trigger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(auth()->user()->photo)
                            <img src="{{ asset('storage/'.auth()->user()->photo) }}" alt="Profile">
                        @else
                            <span class="avatar-fallback">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                        @endif
                        <span class="profile-copy d-none d-sm-block"><strong>{{ auth()->user()->name }}</strong><small>{{ auth()->user()->email }}</small></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end profile-menu">
                        <div class="px-3 py-2 border-bottom"><strong class="d-block">{{ auth()->user()->name }}</strong><small class="text-secondary">{{ auth()->user()->email }}</small></div>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}"><i class="bi bi-person me-2"></i>Profile</a>
                        <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="dropdown-item text-danger" type="submit"><i class="bi bi-box-arrow-right me-2"></i>Log out</button></form>
                    </div>
                </div>
            </div>
        </header>
        <main class="admin-content">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const adminSidebar = document.getElementById('adminSidebar');
        const desktopSidebarKey = 'pathway-admin-sidebar-collapsed';

        if (window.innerWidth >= 992 && localStorage.getItem(desktopSidebarKey) === 'true') {
            document.body.classList.add('sidebar-collapsed');
        }

        sidebarToggle?.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                bootstrap.Offcanvas.getOrCreateInstance(adminSidebar).show();
                return;
            }

            document.body.classList.toggle('sidebar-collapsed');
            localStorage.setItem(desktopSidebarKey, document.body.classList.contains('sidebar-collapsed'));
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                bootstrap.Offcanvas.getInstance(adminSidebar)?.hide();
            }
        });

        const themeToggle = document.getElementById('themeToggle');
        themeToggle?.addEventListener('click', () => {
            document.documentElement.classList.toggle('admin-dark');
            themeToggle.querySelector('i').className = document.documentElement.classList.contains('admin-dark') ? 'bi bi-sun' : 'bi bi-moon';
        });
    </script>
    @stack('scripts')
</body>
</html>
