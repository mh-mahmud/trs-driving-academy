<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class HeroSectionController extends Controller {
 public function edit():View{return view('admin.home.hero',['settings'=>SiteSetting::firstOrCreate([])]);}
 public function update(Request $r):RedirectResponse{$data=$r->validate(['hero_background'=>['nullable','image','max:6144'],'hero_subtitle'=>['nullable','string','max:255'],'hero_title'=>['required','string','max:500'],'hero_description'=>['nullable','string','max:1000'],'hero_primary_text'=>['nullable','string','max:100'],'hero_primary_url'=>['nullable','string','max:500'],'hero_secondary_text'=>['nullable','string','max:100'],'hero_secondary_url'=>['nullable','string','max:500'],'hero_success_title'=>['nullable','string','max:255'],'hero_success_text'=>['nullable','string','max:255'],'hero_badges'=>['nullable','array','max:3'],'hero_badges.*.title'=>['nullable','string','max:100'],'hero_badges.*.text'=>['nullable','string','max:255'],'hero_stats'=>['nullable','array','max:4'],'hero_stats.*.value'=>['nullable','string','max:30'],'hero_stats.*.label'=>['nullable','string','max:100']]);$s=SiteSetting::firstOrCreate([]);if($r->hasFile('hero_background')){if($s->hero_background)Storage::disk('public')->delete($s->hero_background);$data['hero_background']=$r->file('hero_background')->store('site/hero','public');}else unset($data['hero_background']);$s->update($data);return back()->with('status','Hero section updated successfully.');}
}
