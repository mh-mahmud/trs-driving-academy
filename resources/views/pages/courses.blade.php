@extends('layouts.app')

@section('title', 'Offline Courses')

@section('page_styles')
<style>
        :root {
            --primary-color: #2c31b4;
            --primary-accent-color: #1c1f76;
            --secondary-color: #f5821f;
            --secondary-accent-color: #d5690c;
            --primary-rgb: 44, 49, 180;
            --primary-accent-rgb: 28, 31, 118;
            --secondary-rgb: 245, 130, 31;
            --secondary-accent-rgb: 213, 105, 12;
        }
    </style>
<style>
        .active-filter {
            background: #f8f9fa;
            border-radius: 8px;
            border-right: 3px solid #ee6354;
        }

        .latest-posts li.active-filter {
            padding: 5px;
        }

        .btn-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 2.6em;
            line-height: 1.3em;
        }

        /* Select2 Bootstrap 5 Fixes */
        .select2-container--bootstrap-5 .select2-selection {
            height: 50px !important;
            display: flex !important;
            align-items: center !important;
            border: 1px solid #ced4da !important;
            border-radius: 5px !important;
            position: relative !important;
        }

        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
            line-height: 48px !important;
            /* Adjusted slightly for alignment */
            padding-left: 15px !important;
            padding-right: 40px !important;
            color: #495057 !important;
            display: block !important;
        }

        .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__clear,
        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__clear {
            overflow: visible !important;
            width: 40px !important;
            height: 40px !important;
            text-indent: 0 !important;
            margin-right: -20px;
        }

        /* Force Clear Button Visibility */
        .select2-selection__clear {
            position: absolute !important;
            right: 35px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            color: #ee6354 !important;
            font-size: 22px !important;
            cursor: pointer !important;
            z-index: 10 !important;
            display: block !important;
            background: transparent !important;
            line-height: 1 !important;
        }

        .select2-selection__clear::before {
            content: "×" !important;
            /* Multiplication sign (X) */
        }

        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__clear:hover {
            color: #d14d3d !important;
        }

        .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
            height: 48px !important;
            right: 10px !important;
            position: absolute !important;
            display: flex !important;
            align-items: center !important;
        }

        .select2-container--bootstrap-5 .select2-dropdown {
            border-color: #ced4da !important;
            z-index: 9999 !important;
        }

        button[type="submit"].btn-primary.w-100,
        .btn-reset {
            height: 50px !important;
            min-width: 50px !important;
        }
    </style>
<style>
    .form-group {
        margin-bottom: 16px;
    }
</style>
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bar-info"><br><br><br><br><br>
    <div class="container">
        <div class="row">
                        <div class="col-md-12 col-12">
                <div class="breadcrumb-list">
                    <h2 class="breadcrumb-title">Best Driving Courses in Bangladesh</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.pdts.com.bd">Home</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
    <!-- Course -->
    <x-course-catalog :courses="$courses" :course-types="$courseTypes" :cities="$cities" :branches="$branches" />
    <!-- Online Courses Section -->
    <style>
        .premium-online-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .premium-online-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(var(--primary-rgb), 0.15);
            border-color: var(--primary-color);
        }
        .online-course-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        .online-course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .premium-online-card:hover .online-course-img img {
            transform: scale(1.1);
        }
        .online-course-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--secondary-color);
            color: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            z-index: 2;
        }
        .online-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .online-category {
            font-size: 13px;
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
            display: block;
        }
        .online-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #2D3436;
            line-height: 1.4;
            margin-bottom: 15px;
            height: 2.8em;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .online-meta {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
            font-size: 14px;
            color: #636E72;
        }
        .online-meta li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .online-meta i {
            color: var(--secondary-color);
            width: 15px;
        }
        .online-footer {
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            border-top: 1px solid #F1F2F6;
        }
        .online-price {
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--primary-color);
        }
        .btn-online-enroll {
            background: var(--primary-color);
            color: #fff !important;
            padding: 10px 25px;
            border-radius: 12px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-online-enroll:hover {
            background: var(--secondary-color);
            box-shadow: 0 5px 15px rgba(var(--secondary-rgb), 0.3);
        }
    </style>

    <div class="online-courses-wrapper py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <span class="text-primary fw-bold text-uppercase tracking-wider">Expand Your Horizons</span>
                    <h2 class="display-5 fw-black mt-2 mb-3">Premium Online Courses</h2>
                    <div class="mx-auto bg-primary" style="height: 4px; width: 80px; border-radius: 2px;"></div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                                    <div class="col-12 text-center py-5">
                        <div class="bg-white p-5 rounded-4 shadow-sm">
                            <i class="fa-solid fa-video-slash display-4 text-muted mb-3"></i>
                            <p class="text-muted fs-5">No Online Courses Available Right Now.</p>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
    <!-- FAQ Area ============================================ -->
    <div id="faq-area" class="faq-area bg-white pt-90 pb-60">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="section-title text-center col-12 mb-45">
                    <h2 class="mb-3 heading">Frequently Asked Questions</h2>
                    <i class="fas fa-traffic-light  site-text-primary"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="panel-group" id="faq">
                        @forelse($faqs as $faq)
                            <div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-bs-toggle="collapse" aria-expanded="{{ $loop->first?'true':'false' }}" href="#faq-{{ $faq->id }}">{{ $faq->question }}</a></h4></div><div id="faq-{{ $faq->id }}" class="panel-collapse collapse {{ $loop->first?'show':'' }}" data-bs-parent="#faq"><div class="panel-body"><p>{{ $faq->answer }}</p></div></div></div>
                        @empty
                            <p class="text-muted">No frequently asked questions available.</p>
                        @endforelse
                                            </div>
                </div>
                <div class="faq-image col-lg-6 col-12 pl-4">
                    <img data-src="https://www.pdts.com.bd/assets/frontend/img/faq/def-image.jpg"
                        alt="def-image.jpg" class="lazyload" />
                </div>
            </div>
        </div>
    </div>

        <!-- CTA Area
============================================ -->

        <!-- Footer Area
============================================ -->
        <div>
        <!--  Modify -->
    <!--     Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <!--Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "262182287918800");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--end Modify messenger code -->
    <!--Start of Tawk.to Script-->
    <!--    <script type="text/javascript">
        -- >
        <
        !--
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        -- >
        <
        !--(function() {
            -- >
            <
            !--
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            -- >
            <
            !--s1.async = true;
            -- >
            <
            !--s1.src = 'https://embed.tawk.to/667cf7cceaf3bd8d4d14d968/1i1c2fufj';
            -- >
            <
            !--s1.charset = 'UTF-8';
            -- >
            <
            !--s1.setAttribute('crossorigin', '*');
            -- >
            <
            !--s0.parentNode.insertBefore(s1, s0);
            -- >
            <
            !--
        })();
        -- >
        <
        !--
    </script>-->
    <!--End of Tawk.to Script-->


    <!--Start of Tawk.to Script-->
    <!--<script type="text/javascript">
        -- >
        <
        !--
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        -- >
        <
        !--(function() {
            -- >
            <
            !--
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            -- >
            <
            !--s1.async = true;
            -- >
            <
            !--s1.src = 'https://embed.tawk.to/667cf7cceaf3bd8d4d14d968/1i1c2fufj';
            -- >
            <
            !--s1.charset = 'UTF-8';
            -- >
            <
            !--s1.setAttribute('crossorigin', '*');
            -- >
            <
            !--s0.parentNode.insertBefore(s1, s0);
            -- >
            <
            !--
        })();
        -- >
        <
        !--
    </script>-->
    <!--End of Tawk.to Script-->
    <!--<style>-->
    <!--    .btn-primary {-->
    <!--        color: #fff;-->
    <!--        background-color: #007bff;-->
    <!--        border-color: #007bff;-->
    <!--    }-->

    <!--    .btn-primary:hover {-->
    <!--        color: #fff;-->
    <!--        background-color: #0056b3;-->
    <!--        border-color: #004085;-->
    <!--    }-->

    <!--    .btn-primary .fas {-->
    <!--        margin-right: 8px;-->
    <!--    }-->
    <!--</style>-->
@endsection
