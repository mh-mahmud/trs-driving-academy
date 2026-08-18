<section class="home-three-goals">
    <div class="container"><div class="row align-items-center">
        <div class="col-xl-3 col-lg-12 col-md-12 mb-4 mb-xl-0" data-aos="fade-down"><div class="acheive-goals-main"><h2>{{ $settings?->achievement_title ?: 'Achieve your Goals with PATHWAY DRIVING TRAINING SCHOOL' }}</h2></div></div>
        @foreach($items as $item)
            <div class="col-xl col-lg-4 col-md-4 col-12 mb-4 mb-lg-0" data-aos="fade-down">
                <div class="acheive-goals d-flex flex-column align-items-center text-center">
                    <div class="mb-2" style="font-size:40px;color:{{ $item->icon_color }}"><i class="{{ $item->icon_class }}"></i></div>
                    <h4 class="m-0 mb-1" style="font-size:38px;font-weight:bold;color:#333"><span class="counterUp">{{ $item->value }}</span></h4>
                    <p class="m-0 text-muted" style="max-width:150px;font-size:15px">{{ $item->label }}</p>
                </div>
            </div>
        @endforeach
    </div></div>
</section>
