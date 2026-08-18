@extends('layouts.app')

@section('title', 'Corporate Driving')

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
                    <h2 class="breadcrumb-title">Corporate</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.pdts.com.bd">Home</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Corporate Driving</li>
                                                        <li class="breadcrumb-item active" aria-current="page">Corporate</li>
                                                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
        <style>
    .corporate-card {
        background: #ffffff;
    }

    .corporate-img {
        height: 220px;
        /* fixed height */
        width: 100%;
        object-fit: cover;
        /* space fill korbe */
        border-radius: 10px;
    }

    .corporate-title {
        color: #a30000;
        font-weight: 400;
    }

    .corporate-divider {
        height: 3px;
        background-color: #a30000;
        width: 100%;
    }

    .banner-section {
        width: 100%;
        height: 500px;
        /* banner height */
        overflow: hidden;
    }

    .banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* crop image perfectly */
        display: block;
    }

    .corporate-img-box {
        width: 100%;
        aspect-ratio: 4/3;
        background: #f2f2f2;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .corporate-img-corporate {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

     /* crop image perfectly */





     /* Video Section Styles */
.video-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    margin-bottom: 30px;
    border: none;
}

.video-card:hover {
    transform: translateY(-5px);
}

.video-container {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border: none;
}

.video-info {
    padding: 15px;
}

.video-title {
    font-size: 1.1rem;
    color: #333;
    font-weight: 600;
    margin-bottom: 5px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.video-thumb {
    height: 350px;
}

@media (max-width: 768px) {
    .video-thumb {
        height: 220px;
    }
}
</style>
<section class="py-5 section new-course">
    <div class="container">
        <h2 class="text-center mb-5 text-danger fw-bold">
            Corporate Driving
        </h2>
        <div class="row">
                            <div class="col-md-6 mb-4">
                    <div class="corporate-card p-3 h-100">
                        <div class="row align-items-center g-3">
                            <!-- IMAGE -->
                            <div class="col-4 text-center">
                                <img src="https://www.pdts.com.bd/admin/corporateData/large/1772877824_WhatsApp Image 2026-03-07 at 4.00.56 PM.jpeg"
                                    class="img-fluid corporate-img" alt="">
                            </div>
                            <!-- CONTENT -->
                            <div class="col-8">
                                <h5 class="corporate-title">
                                    <strong>Name :</strong>
                                    Most. Sumya Ahmmad
                                </h5>

                                <!-- <p class="mb-1">
                                    <strong>Email :</strong>
                                    pathway.dts@gmail.com
                                </p> -->

                                <!-- <p class="mb-1">
                                    <strong>Degree :</strong>
                                    
                                </p>

                                <p class="mb-2">
                                    
                                </p> -->

                                <p class="mb-2">
                                    <strong>Details :</strong>
                                    Most. Sumya Ahmmad is a BRTA Approved Master Driving Trainer with over 5 years of experience in driver training and road safety education. She specializes in women driving training, beginner driver instruction, defensive driving, and safe vehicle handling.
                                </p>

                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="https://www.pdts.com.bd/my-dashboard/Get-Apply-Corporate-Course"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Get Booking
                                    </a>

                                    <!-- <a href="https://www.pdts.com.bd/courses"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Enroll Now
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <!-- RED LINE -->
                        <div class="corporate-divider mt-3"></div>
                    </div>
                </div>
                            <div class="col-md-6 mb-4">
                    <div class="corporate-card p-3 h-100">
                        <div class="row align-items-center g-3">
                            <!-- IMAGE -->
                            <div class="col-4 text-center">
                                <img src="https://www.pdts.com.bd/admin/corporateData/large/1776064101_00405bd2-ced5-4253-b075-a17831e0983d.png"
                                    class="img-fluid corporate-img" alt="">
                            </div>
                            <!-- CONTENT -->
                            <div class="col-8">
                                <h5 class="corporate-title">
                                    <strong>Name :</strong>
                                    Md Jahangir Alam
                                </h5>

                                <!-- <p class="mb-1">
                                    <strong>Email :</strong>
                                    hqpathway@gmail.com
                                </p> -->

                                <!-- <p class="mb-1">
                                    <strong>Degree :</strong>
                                    
                                </p>

                                <p class="mb-2">
                                    
                                </p> -->

                                <p class="mb-2">
                                    <strong>Details :</strong>
                                    Md Jahangir Alam is a retired Master Warrant Officer (Bangladesh Air Force) and BRTA-approved Driving Instructor with extensive experience as the Chief Instructor in Driving School. A certified SEIP-BRTC Master Trainer , he specializes in defensive driving, special vehicle operations, and professional driver education.
                                </p>

                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="https://www.pdts.com.bd/my-dashboard/Get-Apply-Corporate-Course"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Get Booking
                                    </a>

                                    <!-- <a href="https://www.pdts.com.bd/courses"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Enroll Now
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <!-- RED LINE -->
                        <div class="corporate-divider mt-3"></div>
                    </div>
                </div>
                            <div class="col-md-6 mb-4">
                    <div class="corporate-card p-3 h-100">
                        <div class="row align-items-center g-3">
                            <!-- IMAGE -->
                            <div class="col-4 text-center">
                                <img src="https://www.pdts.com.bd/admin/corporateData/large/1776068110_bfc27eb1-3388-4047-92a5-702948ee3b12.png"
                                    class="img-fluid corporate-img" alt="">
                            </div>
                            <!-- CONTENT -->
                            <div class="col-8">
                                <h5 class="corporate-title">
                                    <strong>Name :</strong>
                                    Md. Mizanur Rahman
                                </h5>

                                <!-- <p class="mb-1">
                                    <strong>Email :</strong>
                                    ddd
                                </p> -->

                                <!-- <p class="mb-1">
                                    <strong>Degree :</strong>
                                    
                                </p>

                                <p class="mb-2">
                                    
                                </p> -->

                                <p class="mb-2">
                                    <strong>Details :</strong>
                                    Md. Mizanur Rahman is an experienced Transport Coordinator and Driving Instructor with over 19 years of expertise in transport operations and vehicle maintenance. He holds a Diploma in Automobile Technology and is a certified Master Trainer (ToT), specializing in defensive driving, driver management, and large-scale fleet administration.
                                </p>

                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="https://www.pdts.com.bd/my-dashboard/Get-Apply-Corporate-Course"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Get Booking
                                    </a>

                                    <!-- <a href="https://www.pdts.com.bd/courses"
                                        class="btn btn-success btn-sm rounded-pill px-3">
                                        Enroll Now
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <!-- RED LINE -->
                        <div class="corporate-divider mt-3"></div>
                    </div>
                </div>
                    </div>

    </div>
</section>
<section class="section share-knowledge">
    <div class="container">
                    <div class="row mb-4">

                <div class="col-md-6">
                    <div class="corporate-img-box">
                        <img src="https://www.pdts.com.bd/admin/corporateData/large/1776781682_পেশাদার চালকের দক্ষতা উন্নয়ন.png"
                            class="corporate-img-corporate">
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-center">
                    <div class="join-mentor aos" data-aos="fade-up">
                        <h2>Defensive Driving Course</h2>
                        <p>
                            
                        </p>
                        <p>
                            
                        </p>
                        <p>
                            This course focuses on developing defensive driving skills to reduce accidents and improve road safety. Participants learn hazard perception, speed control, safe overtaking, and emergency handling techniques.
                        </p>
                    </div>
                </div>

            </div>
                    <div class="row mb-4">

                <div class="col-md-6">
                    <div class="corporate-img-box">
                        <img src="https://www.pdts.com.bd/admin/corporateData/large/1776781833_পেশাদার চালকের দক্ষতা উন্নয়ন (1).png"
                            class="corporate-img-corporate">
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-center">
                    <div class="join-mentor aos" data-aos="fade-up">
                        <h2>Professional Driver Skill Development</h2>
                        <p>
                            
                        </p>
                        <p>
                            
                        </p>
                        <p>
                            This program enhances professional driving skills including smooth driving, discipline, punctuality, and passenger handling for corporate and office drivers.
                        </p>
                    </div>
                </div>

            </div>
            </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            
                
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="video-card bg-white shadow-sm rounded overflow-hidden">

                        
                        <div class="position-relative">

                            <a href="https://youtu.be/8-ToMgCrRzA" target="_blank">
                                <img src="https://img.youtube.com/vi/8-ToMgCrRzA/hqdefault.jpg"
                                     class="w-100 video-thumb"
                                     style="object-fit:cover;">
                            </a>

                            
                                                        <div style="
                                position:absolute;
                                top:50%;
                                left:50%;
                                transform:translate(-50%,-50%);
                                font-size:80px;
                                color:white;">
                                ▶
                            </div>
                            
                        </div>

                        
                        <div class="p-3">
                            <h5 class="mb-2">
                                Corporate Driving Training PATHWAY Defensive Driving
                            </h5>

                            <small class="text-muted">
                                28 Apr, 2026
                            </small>
                        </div>

                    </div>
                </div>

            
        </div>
    </div>
</section>


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
