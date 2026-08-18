@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- Backgrounds -->
    <div id="login-bg" class="container-fluid">
        
        
    </div>
    <!-------- Pop-up -->

    <!-- Main Wrapper -->
    <div class="main-wrapper log-wrap">
        <div class="row">
            <!-- Login Banner -->
            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://www.pdts.com.bd/uploads/images/login_banner_1773309234.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h1>স্বাগতম</h1>
                            <h4>দেশের প্রথম লার্নিং ম্যানেজমেন্ট সিস্টেমে পরিচালিত ড্রাইভিং স্কুলে</h4>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://www.pdts.com.bd/uploads/images/login_banner_1773309234.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h1>স্বাগতম</h1>
                            <h4>আন্তর্জাতিক মানের ড্রাইভিং প্রশিক্ষণ কেন্দ্রে</h4>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="https://www.pdts.com.bd/uploads/images/login_banner_1773309234.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h1>স্বাগতম</h1>
                            <h4>শীতাতপ নিয়ন্ত্রিত ও মাল্টিমিডিয়া ক্লাসরুমে </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Banner -->
            <div class="col-md-6 login-wrap-bg">
                <!-- Login -->
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo">
                                <a href="{{ route('home') }}">
                                    <img src="https://www.pdts.com.bd/uploads/logos/logo_dark_1773313471.png"
                                        class="img-fluid" alt="Logo">
                                </a>
                                <div class="back-home">
                                    <a href="{{ route('home') }}">Back to Home</a>
                                </div>
                            </div>
                            <h1>Sign into Your Account</h1>
                            <form method="POST" action="#">
                                @csrf                                <div class="input-block">
                                    <input id="mobile" type="number"
                                        class="form-control " name="mobile"
                                        value="" placeholder="Enter Mobile Number" required
                                        autocomplete="mobile" autofocus>
                                                                    </div>
                                <div class="input-block">
                                    <div class="pass-group">
                                        <input id="password" type="password"
                                            class="form-control pass-input "
                                            name="password" placeholder="Enter Password" required
                                            autocomplete="current-password">
                                        <span class="feather-eye toggle-password"></span>
                                        <span id="password_eye" onclick="password_show_hide();">
                                            <i class="fas fa-eye" id="show-eye"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide-eye"></i>
                                        </span>
                                                                            </div>
                                </div>
                                <div class="forgot">
                                                                            <span class="forgot-password"><a class="forgot-link"
                                                href="https://www.pdts.com.bd/password/reset">Forgot Password ?</a></span>
                                                                    </div>
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me" for="remember">
                                        Remember me
                                        <input type="checkbox" name="remember" id="remember"
                                            >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                        <div class=" text-center">
                            <div class="sign-google">
                                <ul>
                                    <p>New User ? <a style="color: #007bff;" href="{{ route('register') }}">Create an
                                            Account</a></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="google-bg text-center">
                        <span><a class="ms-4" href="#">Cunnect with Us</a></span>
                        <!--<div class="sign-google">-->
                        <!--	<ul>-->
                        <!--		<li>-->
                        <!--                             <a href="https://www.linkedin.com/in/pathway-driving-training-school" target="_blank" class="linked-icon">-->
                        <!--                                 <i class="fab fa-linkedin-in"></i>-->
                        <!--                             </a>-->
                        <!--                         </li>-->
                        <!--		<li><a href="https://www.facebook.com/PathwayDrivingTrainingSchool"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>-->
                        <!--	</ul>-->
                        <!--</div>-->
                        <style>
                            /* Disable hover effects for social media icons */
                            .social-icon-five .nav a:hover {
                                color: inherit !important;
                                background-color: inherit !important;
                                transform: none !important;
                                text-decoration: none !important;
                                box-shadow: none !important;
                            }

                            .instagram-icon {
                                background: linear-gradient(45deg, #F58529, #DD2A7B, #8134AF, #515BD4);
                                color: white;
                                padding: 10px;
                                border-radius: 50%;
                                display: inline-block;
                            }
                        </style>
                        <div class="col-md-8">
                            <div class="social-icon-five  mt-3">
                                <ul class="nav">
                                    <li>
                                        <a href="https://www.linkedin.com/in/pathway-driving-training-school" target="_blank" class="linked-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/PathwayDrivingTrainingSchool" target="_blank"
                                            class="facebook-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCQnVdGR7hgb___3xC9aCEPg" target="_blank"
                                            class="youtube-icon">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/pathwaydrivingtrainingschool" target="_blank" class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var password_eye = document.getElementById("password_eye");
            var show_eye = document.getElementById("show-eye");
            var hide_eye = document.getElementById("hide-eye");
            password_eye.style.marginTop = ".25vw";
            if (screen.width <= 600) {
                password_eye.style.marginTop = ".9vw";
            }

            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
    <!-- LMS START -------------------------------------------------------------------------------->
    <!-- jQuery -->
    <script src="https://www.pdts.com.bd/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="https://www.pdts.com.bd/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://www.pdts.com.bd/assets/js/owl.carousel.min.js"></script>
    <!-- Aos -->
    <script src="https://www.pdts.com.bd/assets/plugins/aos/aos.js"></script>
    <!-- counterup JS -->
    <script src="https://www.pdts.com.bd/assets/js/jquery.waypoints.js"></script>
    <script src="https://www.pdts.com.bd/assets/js/jquery.counterup.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://www.pdts.com.bd/assets/plugins/select2/js/select2.min.js"></script>
    <!-- Slick Slider -->
    <script src="https://www.pdts.com.bd/assets/plugins/slick/slick.js"></script>
    <!-- Swiper Slider -->
    <script src="https://www.pdts.com.bd/assets/plugins/swiper/js/swiper.min.js"></script>
    <!-- Custom JS -->
    <script src="https://www.pdts.com.bd/assets/js/script.js"></script>
    <!-- LMS End -------------------------------------------------------------------------------->
@endsection
