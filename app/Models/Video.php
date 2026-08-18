<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Video extends Model {protected $fillable=['title','image','youtube_url','description','sort_order','is_active'];protected function casts():array{return['is_active'=>'boolean'];}public function getYoutubeIdAttribute():?string{$url=$this->youtube_url;if(preg_match('~(?:youtu\.be/|youtube\.com/(?:watch\?v=|embed/|shorts/))([A-Za-z0-9_-]{11})~',$url,$m))return $m[1];return null;}public function getThumbnailAttribute():?string{return $this->image?asset('storage/'.$this->image):($this->youtube_id?'https://img.youtube.com/vi/'.$this->youtube_id.'/hqdefault.jpg':null);}}
