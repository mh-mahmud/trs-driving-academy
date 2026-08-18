@extends('layouts.app')


@section('content')
<!-- Image Zoom --------------------------------0------------------------------------------------>
    <style>
        .gallery-img {
            position: relative;
            overflow: hidden;
        }

        .gallery-img img {
            width: 100%;
            transition: transform 0.4s ease;
        }

        .gallery-img:hover img {
            transform: scale(1.05);
        }

        /* Overlay */
        .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: 0.3s;
        }

        .gallery-img:hover .img-overlay {
            opacity: 1;
        }

        /* Plus button */
        .zoom-btn {
            color: #fff;
            font-size: 40px;
            cursor: pointer;
            border: 2px solid #fff;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 55px;
            border-radius: 50%;
        }

        .course-img:hover img {
            transform: scale(1.1);
            transition: transform 0.4s ease;
        }

        .course-img:hover .img-overlay {
            opacity: 1;
        }
    </style>
    <section class="hero-premium">
                    <img src="{{ $heroSettings?->hero_background ? asset('storage/'.$heroSettings->hero_background) : asset('uploads/settings/banners/banner-1.jpg') }}" class="hero-bg-img" fetchpriority="high"
                alt="Banner">
        
        <div class="hero-overlay"></div>

        <div class="hero-shapes">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
        </div>

        <div class="container hero-container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-9" data-aos="fade-right" data-aos-duration="1200">
                    <div class="hero-content">
                        <span class="hero-subtitle">
                            <i class="fa-solid fa-bolt-lightning me-2"></i> {{ $heroSettings?->hero_subtitle }}
                        </span>

                        <h1 class="hero-title">
                            {{ $heroSettings?->hero_title }}
                        </h1>

                        <p class="hero-text">
                            {{ $heroSettings?->hero_description }}
                        </p>

                        <div class="d-flex flex-wrap gap-4">
                            <a href="{{ url($heroSettings?->hero_primary_url ?: '/register') }}" class="btn-premium-primary">
                                {{ $heroSettings?->hero_primary_text }} <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                            <a href="{{ url($heroSettings?->hero_secondary_url ?: '/courses') }}" class="btn-premium-outline">
                                {{ $heroSettings?->hero_secondary_text }} <i class="fa-solid fa-layer-group"></i>
                            </a>
                        </div>

                        <div class="mt-5 d-flex align-items-center gap-4 text-white p-3 px-4 rounded-4 border"
                            style="background: rgba(var(--secondary-rgb), 0.1); border-color: rgba(var(--primary-accent-rgb), 0.2) !important; width: fit-content; max-width: 100%; backdrop-filter: blur(5px);">
                            <div class="avatar-pile">
                                <div class="avatar-placeholder" style="z-index: 3; background: #FF4757;">A</div>
                                <div class="avatar-placeholder" style="z-index: 2; background: #2F3542;">K</div>
                                <div class="avatar-placeholder" style="z-index: 1; background: #2ED573;">S</div>
                            </div>
                            <div class="lh-sm">
                                <span class="d-block fw-bold" style="font-size: 1.1rem;">{{ $heroSettings?->hero_success_title }}</span>
                                <small class="text-white text-opacity-60">{{ $heroSettings?->hero_success_text }}</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 d-none d-xl-block" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1500">
                    <div class="hero-floating-badge ms-auto" style="max-width: 340px;">
                        <div class="badge-icon bg-transparent">
                            <img data-src="assets/img/BRTA.png"
                                alt="" class="w-100 h-100 object-fit-contain lazyload">
                        </div>
                        <div>
                            <h6 class="text-white mb-1 fw-bold">{{ data_get($heroSettings?->hero_badges, '0.title') }}</h6>
                            <small class="text-white text-opacity-60">{{ data_get($heroSettings?->hero_badges, '0.text') }}</small>
                        </div>
                    </div>

                    <div class="hero-floating-badge ms-5 mt-5" style="max-width: 300px; animation-delay: -3s;">
                        <div class="badge-icon" style="background: #2ED573;">
                            <i class="fa-solid fa-shield-halved text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-1 fw-bold">{{ data_get($heroSettings?->hero_badges, '1.title') }}</h6>
                            <small class="text-white text-opacity-60">{{ data_get($heroSettings?->hero_badges, '1.text') }}</small>
                        </div>
                    </div>

                    <div class="hero-floating-badge mt-5 me-5" style="max-width: 280px; animation-delay: -1.5s;">
                        <div class="badge-icon" style="background: #ffa502;">
                            <i class="fa-solid fa-clock-rotate-left text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-1 fw-bold">{{ data_get($heroSettings?->hero_badges, '2.title') }}</h6>
                            <small class="text-white text-opacity-60">{{ data_get($heroSettings?->hero_badges, '2.text') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section student-course home-three-course">
        <div class="container">
            <div class="course-widget-three">
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <!--<img class="img-fluid" src="assets/img/icon-three/course-01.svg" alt="Img">-->
                                        <img class="img-fluid lazyload" data-src="assets/img/icon-three/2.svg"
                                            alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-blue"><span class="counterUp">{{ data_get($heroSettings?->hero_stats,'0.value') }}</span></h4>
                                        <p>{{ data_get($heroSettings?->hero_stats,'0.label') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <!--<img class="img-fluid" src="assets/img/icon-three/course-02.svg" alt="Img">-->
                                        <img class="img-fluid lazyload" data-src="assets/img/icon-three/1.svg"
                                            alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-yellow"><span class="counterUp">{{ data_get($heroSettings?->hero_stats,'1.value') }}</span>
                                        </h4>
                                        <p>{{ data_get($heroSettings?->hero_stats,'1.label') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <!--<img class="img-fluid" src="assets/img/icon-three/course-991.svg" alt="Img">-->
                                        <img class="img-fluid lazyload" data-src="assets/img/icon-three/4.svg"
                                            alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-info"><span class="counterUp">{{ data_get($heroSettings?->hero_stats,'2.value') }}</span>
                                        </h4>
                                        <p>{{ data_get($heroSettings?->hero_stats,'2.label') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three ms-0">
                                    <div class="course-img">
                                        <!--<img class="img-fluid" src="assets/img/icon-three/course-99.svg" alt="Img">-->
                                        <img class="img-fluid lazyload" data-src="assets/img/icon-three/3.svg"
                                            alt="Img">
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-green"><span class="counterUp">{{ data_get($heroSettings?->hero_stats,'3.value') }}</span></h4>
                                        <p>{{ data_get($heroSettings?->hero_stats,'3.label') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Online Courses -->
    <!-- Master skills Career -->
    <x-master-skills :settings="$heroSettings" :types="$homeCourseTypes" />
    <!-- /Master skills Career -->



    <x-why-choose :settings="$heroSettings" :items="$whyChooseItems" />
    <!-- Feature Course -->

    <!-- Courses -->
    <x-home-courses :courses="$homeCourses" />
    <!-- /Courses -->

    <x-achievement-stats :settings="$heroSettings" :items="$achievementStats" />

    <x-home-gallery :settings="$heroSettings" :images="$homeGallery" />

    <!-- Become An Instructor -->
    <!--<section class="home-three-become">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-8 col-md-8"  data-aos="fade-up">-->
    <!--                <div class="become-content-three">-->
    <!--                    <h2>Become An Instructor</h2>-->
    <!--                    <p>Top instructors from around the world teach millions of students on DreamsLMS.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-4"  data-aos="fade-up">-->
    <!--                <div class="become-button-three">-->
    <!--                    <a href="courses" class="btn btn-become">Get Started Now</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /Become An Instructor -->

    {{-- Dynamic testimonial slider --}}
    <x-testimonial-slider :settings="$heroSettings" :items="$homeTestimonials" />
        <!-- Latest Blog -->
    <x-home-blogs :blogs="$homeBlogs" />
    <!-- /Latest Blog -->
    <!-- Leading Companies -->
    <section class="leading-section-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-down">
                    <div class="leading-five-content course-count">
                        <h2>{{ $certificationSettings?->certification_title ?? 'Certified By:' }}</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6" data-aos="fade-down">
                    <div class="lead-group-five">
                        <div class="swiper leading-slider-five-swiper">
                            <div class="swiper-wrapper">
                                @foreach($certifications as $certification)
                                    @php($certificationImage=str_starts_with($certification->image,'assets/')?asset($certification->image):asset('storage/'.$certification->image))
                                    <div class="swiper-slide"><div class="lead-img"><img class="img-fluid lazyload" alt="{{ $certification->name }}" data-src="{{ $certificationImage }}" title="{{ $certification->name }}" style="width:55px;"></div></div>
                                @endforeach
                                                                                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Leading Companies -->
    <x-home-videos :settings="$heroSettings" :videos="$homeVideos" />

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
