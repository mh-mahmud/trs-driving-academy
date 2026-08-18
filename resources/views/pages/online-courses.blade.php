@extends('layouts.app')

@section('title', 'Online Courses')

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
        form .error {
            font-size: .9em;
            color: #dc3545;
            display: none;
        }

        form .form-control.is-invalid {
            background-image: unset;
        }

        form #show-password {
            position: absolute;
            right: 30px;
            top: 40px;
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
                    <h2 class="breadcrumb-title">Online Courses</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.pdts.com.bd">Home</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Enroll</li>
                                                        <li class="breadcrumb-item active" aria-current="page">Online Courses</li>
                                                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
            <div class="container py-5">
        <div class="card border-0">
            <div class="card-body">
                <form id="online-course-enroll">
                    <input type="hidden" name="_token" value="XWEOCsjRrv7uuMbwynXZs2ZS85Gqe1Ah6O1Xi66z">                    <div class="row">
                                                    <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Please enter your full name">
                                <div class="error"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="phone" name="mobile" id="mobile" class="form-control" placeholder="Please Enter a valid mobile number">
                                <div class="error"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="(Optional)">
                                <div class="error"></div>
                            </div>
                                                <div class="form-group col-md-6">
                            <label for="course_id">Which Course You Want to Get?</label>
                            <select name="course_id" id="course_id" class="form-control select2" required>
                                <option value="0"> -- Choose A Course -- </option>
                                                            </select>
                            <div class="error"></div>
                        </div>
                                                    <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <span id="show-password"><i class="fa-solid fa-eye"></i></span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off">
                                <div class="error"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off">
                                <div class="error"></div>
                            </div>
                                            </div>
                    <div class="form-group">
                        <button type="submit" class="btn primary" id="submit">Enroll Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
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
