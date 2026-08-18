<section class="home-three-courses dynamic-home-courses">
    <div class="container">
        <div class="row"><div class="col-12"><div class="home-three-head section-header-title d-flex justify-content-between align-items-center"><div class="home-three-head-content"><h2>Courses</h2></div><div class="see-all"><a href="{{ route('courses') }}">See all<span class="see-all-icon"><i class="fas fa-arrow-right"></i></span></a></div></div></div></div>
        <div class="row g-4">
            @forelse($courses as $course)
                @php($courseUrl=route('courses').'#'.$course->slug)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-aos="fade-up">
                    <div class="course-box-three h-100"><div class="course-three-item h-100">
                        <div class="course-three-img"><a href="{{ $courseUrl }}">@if($course->image)<img class="img-fluid" loading="lazy" src="{{ asset('storage/'.$course->image) }}" alt="{{ $course->title }}">@else<div class="dynamic-course-placeholder"><i class="fas fa-car-side"></i></div>@endif</a><div class="heart-three"><a href="{{ $courseUrl }}"><i class="fa-regular fa-heart"></i></a></div></div>
                        <div class="course-three-content"><div class="course-three-text"><a href="{{ $courseUrl }}"><p>{{ $course->type->name }}</p><h3 class="title instructor-text">{{ $course->title }}</h3></a></div><div class="price-three-group d-flex align-items-center justify-content-between"><div class="course-price-three"><h3>BDT {{ number_format($course->fee,0) }}</h3></div><div class="price-three-time d-inline-flex align-items-center"><i class="fa-regular fa-clock me-2"></i><span>{{ $course->duration ?: '—' }}</span></div></div></div>
                    </div></div>
                </div>
            @empty
                <div class="col-12"><div class="text-center py-5 text-muted">No active courses available.</div></div>
            @endforelse
        </div>
    </div>
</section>
<style>.dynamic-home-courses{padding:70px 0}.dynamic-home-courses .course-three-item{display:flex;flex-direction:column}.dynamic-home-courses .course-three-content{display:flex;flex:1;flex-direction:column}.dynamic-home-courses .price-three-group{margin-top:auto}.dynamic-home-courses .course-three-img>a>img,.dynamic-course-placeholder{width:100%;height:230px;object-fit:cover}.dynamic-course-placeholder{display:grid;place-items:center;background:linear-gradient(135deg,#eef2ff,#e6faf4);font-size:48px;color:#2c31b4}@media(max-width:575.98px){.dynamic-home-courses{padding:45px 0}.dynamic-home-courses .course-three-img>a>img,.dynamic-course-placeholder{height:210px}}</style>
