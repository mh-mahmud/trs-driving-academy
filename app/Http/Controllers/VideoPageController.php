<?php

namespace App\Http\Controllers;

use App\Models\NavigationItem;
use App\Models\Video;
use Illuminate\View\View;

class VideoPageController extends Controller
{
    public function show(Video $video): View
    {
        abort_unless($video->is_active, 404);

        $pages = NavigationItem::whereNull('parent_id')
            ->where('is_active', true)
            ->with('children')
            ->orderBy('sort_order')
            ->get();

        return view('pages.video-details', compact('video', 'pages'));
    }
}
