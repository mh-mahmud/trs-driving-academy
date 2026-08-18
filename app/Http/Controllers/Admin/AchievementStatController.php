<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AchievementStat;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
class AchievementStatController extends Controller {
    public function index():View{return view('admin.home.achievements',['items'=>AchievementStat::orderBy('sort_order')->paginate(20),'sectionTitle'=>SiteSetting::first()?->achievement_title?:'Achieve your Goals with PATHWAY DRIVING TRAINING SCHOOL']);}
    public function store(Request $r):RedirectResponse{$data=$this->validated($r);$data['is_active']=$r->boolean('is_active');AchievementStat::create($data);return back()->with('status','Statistic added successfully.');}
    public function update(Request $r,AchievementStat $achievement):RedirectResponse{$data=$this->validated($r);$data['is_active']=$r->boolean('is_active');$achievement->update($data);return back()->with('status','Statistic updated successfully.');}
    public function destroy(AchievementStat $achievement):RedirectResponse{$achievement->delete();return back()->with('status','Statistic deleted successfully.');}
    public function title(Request $r):RedirectResponse{SiteSetting::firstOrCreate([])->update($r->validate(['achievement_title'=>['required','string','max:255']]));return back()->with('status','Section title updated successfully.');}
    private function validated(Request $r):array{return $r->validate(['value'=>['required','string','max:50'],'label'=>['required','string','max:255'],'icon_class'=>['required','string','max:255'],'icon_color'=>['required','regex:/^#[0-9A-Fa-f]{6}$/'],'sort_order'=>['nullable','integer','min:0']]);}
}
