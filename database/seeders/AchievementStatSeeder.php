<?php
namespace Database\Seeders;
use App\Models\AchievementStat;
use Illuminate\Database\Seeder;
class AchievementStatSeeder extends Seeder {
    public function run():void {
        if(AchievementStat::exists())return;
        foreach([['1452','Students Enrolled all over World','fas fa-user-graduate','#8b5cf6'],['8','Total Courses on our Platform','fas fa-book-open','#0ea5e9'],['32','Total car','fas fa-car-side','#10b981']] as $i=>[$value,$label,$icon_class,$icon_color]) AchievementStat::create(compact('value','label','icon_class','icon_color')+['sort_order'=>$i,'is_active'=>true]);
    }
}
