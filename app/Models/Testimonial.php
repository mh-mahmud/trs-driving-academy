<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;
class Testimonial extends Model {protected $fillable=['name','review','rating','photo','sort_order','is_active'];protected function casts():array{return ['is_active'=>'boolean','rating'=>'integer'];}}
