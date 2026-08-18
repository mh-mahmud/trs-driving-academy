<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class VideoController extends Controller {
 public function index():View{return view('admin.videos.index',['videos'=>Video::orderBy('sort_order')->latest('id')->paginate(18),'settings'=>SiteSetting::firstOrCreate([])]);}
 public function settings(Request $request):RedirectResponse{$data=$request->validate(['video_section_title'=>['required','string','max:255'],'video_section_link_text'=>['required','string','max:100'],'video_section_link_url'=>['required','string','max:1000']]);SiteSetting::firstOrCreate([])->update($data);return back()->with('status','Video section settings updated successfully.');}
 public function store(Request $request):RedirectResponse{$data=$this->validated($request,true);if($request->hasFile('image'))$data['image']=$request->file('image')->store('videos','public');$data['is_active']=$request->boolean('is_active');Video::create($data);return back()->with('status','Video added successfully.');}
 public function update(Request $request,Video $video):RedirectResponse{$data=$this->validated($request);if($request->hasFile('image')){if($video->image)Storage::disk('public')->delete($video->image);$data['image']=$request->file('image')->store('videos','public');}$data['is_active']=$request->boolean('is_active');$video->update($data);return back()->with('status','Video updated successfully.');}
 public function destroy(Video $video):RedirectResponse{if($video->image)Storage::disk('public')->delete($video->image);$video->delete();return back()->with('status','Video deleted successfully.');}
 private function validated(Request $request,bool $creating=false):array{return $request->validate(['title'=>['required','string','max:255'],'youtube_url'=>['required','url','max:500',function($attribute,$value,$fail){if(!preg_match('~(?:youtube\.com|youtu\.be)~i',$value))$fail('Please enter a valid YouTube link.');}],'description'=>['nullable','string','max:5000'],'image'=>[$creating?'nullable':'nullable','image','max:4096'],'sort_order'=>['nullable','integer','min:0']]);}
}
