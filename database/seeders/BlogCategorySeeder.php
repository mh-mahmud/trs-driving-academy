<?php
namespace Database\Seeders;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
class BlogCategorySeeder extends Seeder {public function run():void{foreach(['Driving Tips','Road Safety','News & Updates'] as $name)BlogCategory::firstOrCreate(['name'=>$name],['slug'=>str($name)->slug()]);}}
