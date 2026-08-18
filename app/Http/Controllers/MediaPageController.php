<?php
namespace App\Http\Controllers;use App\Models\MediaItem;use App\Models\SiteSetting;use Illuminate\View\View;
class MediaPageController extends Controller {public function index():View{return view('pages.media',['items'=>MediaItem::where('is_active',true)->orderBy('sort_order')->latest('published_at')->paginate(12),'settings'=>SiteSetting::first()]);}}
