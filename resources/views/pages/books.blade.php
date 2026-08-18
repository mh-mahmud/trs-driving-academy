@extends('layouts.app')

@section('title', 'Book')

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
        .book-box {
            transition: box-shadow 0.3s, border-color 0.3s;
            border: 1px solid #f0f0f0;
            overflow: hidden;
            background-color: #fff;
            width: 90%;
            margin: 0 auto;
        }

        /* Hover Effects for Box */
        .book-box:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            border-color: #007bff;
        }

        /* Image Hover Effect */
        .product-img img {
            transition: transform 0.3s;
        }

        .book-box:hover .product-img img {
            transform: scale(1.08);
        }

        /* Title Styling and Hover Effect */
        .book-title-link {
            color: #333;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .book-title-link:hover {
            color: #007bff;
        }

        /* Price Styling */
        .final-price {
            color: #dd763a;
            font-size: 1rem;
            font-weight: bold
        }

        .original-price {
            font-size: 0.8rem;
            color: #999;
        }

        /* Author Info Styling */
        .author-info {
            font-size: 0.9rem;
            color: #555;
            transition: color 0.3s;
        }

        .book-box:hover .author-info {
            color: #1f00d1;
        }

        /* Button Styling and Hover Effect */
        .view-details-btn {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            transition: background-color 0.3s, border-color 0.3s;
            font-size: 0.9rem !important;
            margin: 0 auto;
        }

        .view-details-btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Box Shadow on Button Hover */
        .view-details-btn:hover {
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.3);
        }

        /* Transition for Description Text */
        .description {
            transition: color 0.3s;
        }

        .book-box:hover .description {
            color: #333;
        }

        .how-books-help {
            background-color: #f9f9f9;
        }

        .how-books-help h2 {
            font-weight: 600;
            margin-bottom: 40px;
            color: #333;
        }

        .help-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 240px;
        }

        .help-box h4 {
            font-weight: 500;
            margin-bottom: 15px;
            color: #333;
        }

        .help-box p {
            margin-top: 15px !important;
        }

        .help-box p {
            font-size: 14px;
            color: #666;
        }

        .help-box .icon {
            margin-bottom: 15px;
        }

        .help-box i {
            color: #007bff;
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
                    <h2 class="breadcrumb-title">Books</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.pdts.com.bd">Home</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Books</li>
                                                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
            <!-- Books -->
    <section class="books-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Filter -->
                    <div class="showing-list">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <div class="view-icons">
                                        <a href="#" class="grid-view active"><i class="feather-grid"></i></a>
                                    </div>
                                    <div class="show-result">
                                        <h4>Showing 1-5 results</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->

                    <div class="row py-5" style="justify-content: center">
                                                    <div class="col-md-4 d-flex mb-4">
                                <div class="book-box book-design border rounded shadow-sm p-4 position-relative d-flex flex-column"
                                    style="height: 100%;">
                                    <div class="product-img text-center mb-3">
                                        <a href="https://www.pdts.com.bd/books/details/driving-training-guidebook">
                                            <img class="img-fluid rounded lazyload" alt="Driving Training Guidebook"
                                                data-src="https://www.pdts.com.bd/uploads/books/images/17735594482577.jpg"
                                                style="max-height: 350px; object-fit: cover;">
                                        </a>
                                                                                    <div class="position-absolute top-0 end-0 bg-orange text-white px-2 py-1 rounded shadow-sm m-2"
                                                style="opacity: 0.8; font-size: 13px;">
                                                <span>15% Off</span>
                                            </div>
                                                                            </div>
                                    <div class="product-content border-top pt-3 d-flex flex-column flex-grow-1">
                                        <h5 class="title text-truncate mt-2">
                                            <a href="https://www.pdts.com.bd/books/details/driving-training-guidebook"
                                                class="book-title-link">Driving Training Guidebook</a>
                                        </h5>
                                        <div class="book-info d-flex justify-content-between align-items-center mb-2">
                                            <div class="price-info">
                                                                                                    <span
                                                        class="text-decoration-line-through original-price">৳180</span>
                                                    <span
                                                        class="final-price">৳153</span>
                                                                                            </div>
                                            <div class="author-info">
                                                <i class="fas fa-user mr-1"></i>
                                                <span>Md Mizanur Rahman</span>
                                            </div>
                                        </div>
                                        <p class="description text-muted mb-3 mt-3 flex-grow-1">
                                            Driving Licence পরীক্ষা বা ড্রাইভিং ক্যারিয়ারের প্রস্তুতি সবকিছুর জন্য একসাথে দ...
                                        </p>
                                        <a href="https://www.pdts.com.bd/books/details/driving-training-guidebook"
                                            class="btn btn-primary btn-custom w-100 mt-auto view-details-btn">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                                            </div>






                    <!-- Pagination -->

                    
                </div>
            </div>
        </div>
    </section>

    <section class="how-books-help py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How Our Books Will Help You</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="help-box" style="padding: 35px !important">
                        <div class="icon mb-3">
                            <i class="fas fa-car fa-3x text-primary"></i>
                        </div>
                        <h5>Master Driving Techniques</h5>
                        <p>Our books provide detailed guidance on mastering essential driving skills, from basic maneuvers
                            to advanced techniques.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="help-box" style="padding: 35px !important">
                        <div class="icon mb-3">
                            <i class="fas fa-road fa-3x text-success"></i>
                        </div>
                        <h5>Improve Road Safety Awareness</h5>
                        <p>Learn the rules of the road and improve your understanding of safe driving practices to reduce
                            risks and stay safe.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="help-box" style="padding: 35px !important">
                        <div class="icon mb-3">
                            <i class="fas fa-tools fa-3x text-warning"></i>
                        </div>
                        <h5>Maintain Your Vehicle</h5>
                        <p>Get practical advice on vehicle maintenance and troubleshooting, ensuring your car stays in top
                            condition for safe driving.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                                                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                            aria-expanded="true"
                                            href="#faq-1">Why should you choose PATHWAY Driving Training School?</a></h4>
                                </div>
                                <div id="faq-1"
                                    class="panel-collapse collapse show" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <p>PATHWAY Driving Training School is a BRTA Registered Driving Training Centre. We always conduct training programs with the safety of the trainees in mind.</p>
                                    </div>
                                </div>
                            </div>
                                                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                            aria-expanded="false"
                                            href="#faq-2">What makes PATHWAY Driving Training School different?</a></h4>
                                </div>
                                <div id="faq-2"
                                    class="panel-collapse collapse " data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <p>PATHWAY Driving Training School provides training under the supervision of qualified trainers and a structured curriculum. Also, we have special arrangements for women.</p>
                                    </div>
                                </div>
                            </div>
                                                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                            aria-expanded="false"
                                            href="#faq-3">Why Pathway Driving Training School is the best in Dhaka?</a></h4>
                                </div>
                                <div id="faq-3"
                                    class="panel-collapse collapse " data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <p>Pathway Driving School ensures maximum safety of the trainees along with international quality driving training at a low cost in Dhaka. As a result it has become the best driving training center.</p>
                                    </div>
                                </div>
                            </div>
                                                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                            aria-expanded="false"
                                            href="#faq-4">Is there a certificate at the end of the driving training?</a></h4>
                                </div>
                                <div id="faq-4"
                                    class="panel-collapse collapse " data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <p>Yes. Pathway Driving Training School provides certificate to all students after successful completion of driving course. This certificate has an online verification facility. Expats can use this training certificate at the expatriate workplace.</p>
                                    </div>
                                </div>
                            </div>
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
