<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class GalleryController extends Controller {
 public function index():View{return view('admin.gallery.index',['images'=>Gallery::orderBy('sort_order')->latest('id')->paginate(18),'settings'=>SiteSetting::firstOrCreate([])]);}
 public function settings(Request $request):RedirectResponse{$data=$request->validate(['gallery_section_title'=>['required','string','max:255'],'gallery_section_link_text'=>['required','string','max:100'],'gallery_section_link_url'=>['required','string','max:1000']]);SiteSetting::firstOrCreate([])->update($data);return back()->with('status','Gallery section settings updated successfully.');}
 public function store(Request $request):RedirectResponse{$data=$request->validate(['title'=>['nullable','string','max:255'],'image'=>['required','image','max:4096'],'sort_order'=>['nullable','integer','min:0']]);$data['image']=$request->file('image')->store('gallery','public');$data['is_active']=$request->boolean('is_active');Gallery::create($data);return back()->with('status','Gallery image uploaded successfully.');}
 public function update(Request $request,Gallery $gallery):RedirectResponse{$data=$request->validate(['title'=>['nullable','string','max:255'],'image'=>['nullable','image','max:4096'],'sort_order'=>['nullable','integer','min:0']]);if($request->hasFile('image')){Storage::disk('public')->delete($gallery->image);$data['image']=$request->file('image')->store('gallery','public');}$data['is_active']=$request->boolean('is_active');$gallery->update($data);return back()->with('status','Gallery image updated successfully.');}
 public function destroy(Gallery $gallery):RedirectResponse{Storage::disk('public')->delete($gallery->image);$gallery->delete();return back()->with('status','Gallery image deleted successfully.');}
}
