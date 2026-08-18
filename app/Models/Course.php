<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Course extends Model { protected $fillable = ['course_type_id','city_id','branch_id','title','slug','fee','duration','description','image','is_active']; protected function casts(): array { return ['is_active'=>'boolean','fee'=>'decimal:2']; } public function type(): BelongsTo { return $this->belongsTo(CourseType::class,'course_type_id'); } public function city(): BelongsTo { return $this->belongsTo(City::class); } public function branch(): BelongsTo { return $this->belongsTo(Branch::class); } }
