@extends('layouts.app')
@section('title', $video->title)

@section('content')
<div class="breadcrumb-bar breadcrumb-bar-info pt-5">
    <div class="container py-5">
        <div class="breadcrumb-list text-center">
            <h2 class="breadcrumb-title">{{ $video->title }}</h2>
            <nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li><li class="breadcrumb-item active">Video Details</li><li class="breadcrumb-item active">{{ $video->id }}</li></ol></nav>
        </div>
    </div>
</div>

<section class="py-5 bg-light">
    <div class="container py-lg-4"><div class="row g-4">
        <div class="col-lg-9">
            <article class="bg-white rounded-3 shadow-sm overflow-hidden">
                <div class="ratio ratio-16x9 bg-dark">
                    @if($video->youtube_id)
                        <iframe src="https://www.youtube.com/embed/{{ $video->youtube_id }}" title="{{ $video->title }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @elseif($video->thumbnail)
                        <a href="{{ $video->youtube_url }}" target="_blank" rel="noopener"><img class="w-100 h-100 object-fit-cover" src="{{ $video->thumbnail }}" alt="{{ $video->title }}"></a>
                    @endif
                </div>
                <div class="p-4"><h1 class="h3 mb-3">{{ $video->title }}</h1>@if($video->description)<div class="video-description lh-lg">{!! $video->description !!}</div>@endif</div>
            </article>
        </div>
        <aside class="col-lg-3">
            <div class="bg-white border rounded-3 p-4 shadow-sm"><h3 class="h5 mb-4">Pages</h3><div class="d-grid gap-3">
                @foreach($pages as $page)
                    @if($page->url !== '#')<a class="text-dark text-decoration-none" href="{{ url($page->url) }}"><i class="fas fa-chevron-right text-danger me-3"></i>{{ $page->label }}</a>@endif
                    @foreach($page->children as $child)<a class="text-dark text-decoration-none" href="{{ url($child->url) }}"><i class="fas fa-chevron-right text-danger me-3"></i>{{ $child->label }}</a>@endforeach
                @endforeach
            </div></div>
        </aside>
    </div></div>
</section>
@endsection
