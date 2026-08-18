<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class CertificationController extends Controller {
 public function index():View{return view('admin.home.certifications',['certifications'=>Certification::orderBy('sort_order')->paginate(20),'sectionTitle'=>SiteSetting::first()?->certification_title??'Certified By:']);}
 public function store(Request $request):RedirectResponse{$data=$this->validated($request,true);$data['image']=$request->file('image')->store('certifications','public');$data['is_active']=$request->boolean('is_active');Certification::create($data);return back()->with('status','Certification added successfully.');}
 public function update(Request $request,Certification $certification):RedirectResponse{$data=$this->validated($request);if($request->hasFile('image')){if($certification->image&&!str_starts_with($certification->image,'assets/'))Storage::disk('public')->delete($certification->image);$data['image']=$request->file('image')->store('certifications','public');}$data['is_active']=$request->boolean('is_active');$certification->update($data);return back()->with('status','Certification updated successfully.');}
 public function destroy(Certification $certification):RedirectResponse{if(!str_starts_with($certification->image,'assets/'))Storage::disk('public')->delete($certification->image);$certification->delete();return back()->with('status','Certification deleted successfully.');}
 public function title(Request $request):RedirectResponse{$data=$request->validate(['certification_title'=>['required','string','max:255']]);SiteSetting::firstOrCreate([])->update($data);return back()->with('status','Section title updated successfully.');}
 private function validated(Request $request,bool $create=false):array{return $request->validate(['name'=>['required','string','max:255'],'image'=>[$create?'required':'nullable','image','max:2048'],'sort_order'=>['nullable','integer','min:0']]);}
}
