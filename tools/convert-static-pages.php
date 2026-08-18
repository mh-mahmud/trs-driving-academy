<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$home = file_get_contents($root.'/frontend/index.html');
$about = file_get_contents($root.'/frontend/about.html');

if ($home === false || $about === false) {
    throw new RuntimeException('Could not read the static HTML sources.');
}

function contentBetween(string $html, string $start, string $end): string
{
    $startPosition = strpos($html, $start);
    $endPosition = strpos($html, $end, $startPosition ?: 0);

    if ($startPosition === false || $endPosition === false) {
        throw new RuntimeException('Expected page boundary was not found.');
    }

    return trim(substr($html, $startPosition + strlen($start), $endPosition - ($startPosition + strlen($start))));
}

$headerEnd = '</header>';
$footerStart = '    <!-- Footer -->';
$homeContent = contentBetween($home, $headerEnd, $footerStart);
$aboutContent = contentBetween($about, $headerEnd, $footerStart);

$layoutStart = substr($home, 0, strpos($home, $headerEnd) + strlen($headerEnd));
$layoutEnd = substr($home, strpos($home, $footerStart));

$layoutStart = preg_replace(
    '/<title>.*?<\/title>/s',
    "<title>@yield('title', 'Pathway Driving Training School')</title>",
    $layoutStart,
    1
);
$layoutStart = preg_replace(
    '/<meta name="description"\s+content=".*?">/s',
    "<meta name=\"description\" content=\"@yield('meta_description', 'Professional driving training in Dhaka.')\">",
    $layoutStart,
    1
);
$layoutStart = str_replace(
    '<meta name="csrf-token" content="XWEOCsjRrv7uuMbwynXZs2ZS85Gqe1Ah6O1Xi66z">',
    '<meta name="csrf-token" content="{{ csrf_token() }}">',
    $layoutStart
);

// Keep navigation on Laravel routes while the remaining links stay static.
$layoutStart = str_replace('href="index.html"', 'href="{{ route(\'home\') }}"', $layoutStart);
$layoutStart = str_replace('href="about.html"', 'href="{{ route(\'about\') }}"', $layoutStart);
$layoutStart = str_replace('href="https://www.pdts.com.bd"', 'href="{{ route(\'home\') }}"', $layoutStart);
$layoutStart = str_replace('href="about-us"', 'href="{{ route(\'about\') }}"', $layoutStart);
$layoutStart = str_replace('href="corporate-driving/corporate"', 'href="{{ route(\'corporate\') }}"', $layoutStart);
$routeLinks = [
    'login' => 'login',
    'register' => 'register',
    'courses' => 'courses',
    'theory-courses' => 'theory-courses',
    'online-courses' => 'online-courses',
    'books' => 'books',
    'blogs' => 'blogs',
    'media' => 'media',
    'contact' => 'contact',
];
foreach ($routeLinks as $href => $routeName) {
    $layoutStart = str_replace('href="'.$href.'"', 'href="{{ route(\''.$routeName.'\') }}"', $layoutStart);
}
$layoutStart = str_replace('</head>', "    @yield('page_styles')\n</head>", $layoutStart);

$layout = $layoutStart."\n\n        @yield('content')\n\n".$layoutEnd;
$homeView = "@extends('layouts.app')\n\n@section('title', 'Pathway Driving Training School | Top Rated Driving Training Center in Dhaka')\n@section('meta_description', 'PATHWAY DRIVING TRAINING SCHOOL provides the best driving training and certificates in basic and advanced courses at a low cost in Dhaka.')\n\n@section('content')\n".$homeContent."\n@endsection\n";
$aboutView = "@extends('layouts.app')\n\n@section('title', 'About Us - Pathway Driving Training School')\n@section('meta_description', 'PATHWAY Driving Training School is a BRTA-approved driving training center in Dhaka.')\n\n@section('content')\n".$aboutContent."\n@endsection\n";

foreach ([$layout, $homeView, $aboutView] as $output) {
    if (substr_count($output, '<html') > 1) {
        throw new RuntimeException('Generated output contains a duplicate document.');
    }
}

@mkdir($root.'/resources/views/layouts', 0775, true);
@mkdir($root.'/resources/views/pages', 0775, true);
// Preserve the database-driven shared layout once it has been customized.
if (! file_exists($root.'/resources/views/layouts/app.blade.php')) {
    file_put_contents($root.'/resources/views/layouts/app.blade.php', $layout);
}
file_put_contents($root.'/resources/views/pages/home.blade.php', $homeView);
file_put_contents($root.'/resources/views/pages/about.blade.php', $aboutView);

$pages = [
    'corporate' => ['Corporate Driving - Pathway Driving Training School', 'Corporate driving training services from Pathway Driving Training School.'],
    'courses' => ['Offline Courses - Pathway Driving Training School', 'Explore practical offline driving courses from Pathway Driving Training School.'],
    'theory-courses' => ['Theory Courses - Pathway Driving Training School', 'Explore driving theory courses from Pathway Driving Training School.'],
    'online-courses' => ['Online Courses - Pathway Driving Training School', 'Explore online driving courses from Pathway Driving Training School.'],
    'books' => ['Book - Pathway Driving Training School', 'Browse driving-related books and learning resources.'],
    'blogs' => ['Blog - Pathway Driving Training School', 'Read driving guides, safety tips, and updates from Pathway Driving Training School.'],
    'media' => ['Media - Pathway Driving Training School', 'Explore photos and media from Pathway Driving Training School.'],
    'contact' => ['Contact Us - Pathway Driving Training School', 'Contact Pathway Driving Training School for course and admission information.'],
];

foreach ($pages as $slug => [$title, $description]) {
    $html = file_get_contents($root.'/frontend/'.$slug.'.html');
    if ($html === false) {
        throw new RuntimeException('Could not read '.$slug.'.html');
    }

    $content = contentBetween($html, $headerEnd, $footerStart);
    $head = contentBetween($html, '<head>', '</head>');
    preg_match_all('/<style\b[^>]*>.*?<\/style>/si', $head, $styleMatches);
    $styles = implode("\n", $styleMatches[0]);

    $view = "@extends('layouts.app')\n\n";
    $view .= "@section('title', '".str_replace("'", "\\'", $title)."')\n";
    $view .= "@section('meta_description', '".str_replace("'", "\\'", $description)."')\n\n";
    if ($styles !== '') {
        $view .= "@section('page_styles')\n".$styles."\n@endsection\n\n";
    }
    $view .= "@section('content')\n".$content."\n@endsection\n";

    file_put_contents($root.'/resources/views/pages/'.$slug.'.blade.php', $view);
}

// Login and registration share a dedicated full-screen authentication layout.
$loginHtml = file_get_contents($root.'/frontend/login.html');
if ($loginHtml === false) {
    throw new RuntimeException('Could not read login.html');
}
$authHead = contentBetween($loginHtml, '<head>', '</head>');
$authHead = preg_replace('/<title>.*?<\/title>/s', "<title>@yield('title')</title>", $authHead, 1);
$authLayout = "<!doctype html>\n<html lang=\"en\">\n<head>\n".$authHead."\n</head>\n<body>\n@yield('content')\n</body>\n</html>\n";
file_put_contents($root.'/resources/views/layouts/auth.blade.php', $authLayout);

foreach (['login', 'register'] as $authPage) {
    $html = file_get_contents($root.'/frontend/'.$authPage.'.html');
    if ($html === false) {
        throw new RuntimeException('Could not read '.$authPage.'.html');
    }

    $body = contentBetween($html, '<body>', '</body>');
    $body = str_replace('href="https://www.pdts.com.bd"', 'href="{{ route(\'home\') }}"', $body);
    $body = str_replace('href="https://www.pdts.com.bd/login"', 'href="{{ route(\'login\') }}"', $body);
    $body = str_replace('href="https://www.pdts.com.bd/register"', 'href="{{ route(\'register\') }}"', $body);
    $body = preg_replace('/<input type="hidden" name="_token" value="[^"]*">/', '@csrf', $body);
    $body = preg_replace('/(<form\b[^>]*?)\s+action="https:\/\/www\.pdts\.com\.bd\/(?:login|register)"/', '$1 action="#"', $body);

    $view = "@extends('layouts.auth')\n\n@section('title', '".ucfirst($authPage)."')\n\n@section('content')\n".$body."\n@endsection\n";
    file_put_contents($root.'/resources/views/pages/'.$authPage.'.blade.php', $view);
}
