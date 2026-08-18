<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Admin Login | {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">
</head>
<body class="login-page">
    <div class="container-fluid min-vh-100">
        <div class="row min-vh-100">
            <div class="col-lg-6 login-showcase d-none d-lg-flex">
                <div class="showcase-content">
                    <a href="{{ route('home') }}" class="brand text-white mb-5"><span class="brand-mark bg-white text-success">{{ strtoupper(substr(config('app.name'),0,1)) }}</span> {{ config('app.name') }}</a>
                    <span class="eyebrow">ADMIN CONTROL CENTER</span>
                    <h1>Manage your driving academy from one place.</h1>
                    <p>Students, courses, enrollments and content—simple, secure, and organized.</p>
                    <div class="showcase-stats row g-3 mt-4">
                        <div class="col-4"><strong>5K+</strong><span>Students</span></div>
                        <div class="col-4"><strong>24+</strong><span>Courses</span></div>
                        <div class="col-4"><strong>98%</strong><span>Success</span></div>
                    </div>
                </div>
                <div class="showcase-orb orb-one"></div><div class="showcase-orb orb-two"></div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center p-4 p-md-5">
                <div class="login-card w-100">
                    <a href="{{ route('home') }}" class="brand d-lg-none mb-5"><span class="brand-mark">{{ strtoupper(substr(config('app.name'),0,1)) }}</span> {{ config('app.name') }}</a>
                    <div class="login-icon"><i class="bi bi-shield-lock"></i></div>
                    <h2>Welcome back</h2>
                    <p class="text-secondary mb-4">Sign in to your Super Admin account</p>
                    @if($errors->any())<div class="alert alert-danger py-2">{{ $errors->first() }}</div>@endif
                    <form method="POST" action="{{ route('admin.login.store') }}">@csrf
                        <div class="mb-3"><label class="form-label">Email address</label><div class="input-group form-field"><span class="input-group-text"><i class="bi bi-envelope"></i></span><input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email address" autocomplete="username" required autofocus></div></div>
                        <div class="mb-3"><label class="form-label">Password</label><div class="input-group form-field"><span class="input-group-text"><i class="bi bi-lock"></i></span><input id="adminPassword" type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="current-password" required><button class="btn password-toggle" type="button" onclick="const p=document.getElementById('adminPassword');p.type=p.type==='password'?'text':'password'"><i class="bi bi-eye"></i></button></div></div>
                        <div class="form-check mb-4"><input class="form-check-input" type="checkbox" name="remember" id="remember"><label class="form-check-label" for="remember">Remember me</label></div>
                        <button class="btn btn-admin-primary w-100 py-3" type="submit">Sign in <i class="bi bi-arrow-right ms-2"></i></button>
                    </form>
                    <p class="security-note"><i class="bi bi-shield-check"></i> Secured admin access</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
