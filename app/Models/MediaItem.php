<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;
class MediaItem extends Model {protected $fillable=['title','image','url','published_at','sort_order','is_active'];protected function casts():array{return ['published_at'=>'date','is_active'=>'boolean'];}public function getImageUrlAttribute():string{return str_starts_with($this->image,'http')?$this->image:asset('storage/'.$this->image);}}
