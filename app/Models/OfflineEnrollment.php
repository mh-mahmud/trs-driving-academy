<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\Relations\BelongsTo;
class OfflineEnrollment extends Model{protected $guarded=[];protected $hidden=['password'];protected function casts():array{return['date_of_birth'=>'date','start_date'=>'date','payable_amount'=>'decimal:2'];}public function course():BelongsTo{return $this->belongsTo(Course::class);}public function branch():BelongsTo{return $this->belongsTo(Branch::class);}}
