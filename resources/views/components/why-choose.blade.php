<section class="home-three-favourite">
    <div class="container">
        <div class="home-three-head section-header-title" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-10 col-sm-12">
                    <h2><span style="color: rgb(141, 141, 141)">{{ $settings?->why_choose_title ?: 'Why Choose Pathway Driving Training School?' }}</span></h2>
                </div>
            </div>
        </div>
        <div class="swiper home-three-favourite-swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach ($items as $item)
                    <div class="swiper-slide">
                        <div class="favourite-box" data-aos="fade-down">
                            <div class="favourite-item flex-fill">
                                <div class="categories-icon">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" style="width:48px;height:48px;object-fit:contain">
                                    @elseif ($item->icon_class)
                                        <i style="font-size:40px;color:#F15A26" class="{{ $item->icon_class }}"></i>
                                    @endif
                                </div>
                                <div class="categories-content course-info"><h3>{{ $item->title }}</h3></div>
                                <div class="course-instructors"><div class="instructors-info"><p class="me-4">{{ $item->description }}</p></div></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
