<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Branch extends Model {protected $fillable=['city_id','name','address','phone','email','is_active'];protected function casts():array{return['is_active'=>'boolean'];}public function city():BelongsTo{return $this->belongsTo(City::class);}}
