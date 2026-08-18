<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class AchievementStat extends Model {
    protected $fillable=['value','label','icon_class','icon_color','sort_order','is_active'];
    protected function casts():array{return ['is_active'=>'boolean'];}
}
