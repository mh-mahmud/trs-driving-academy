<?php
namespace Database\Seeders;
use App\Models\Branch;
use App\Models\City;
use App\Models\CourseType;
use Illuminate\Database\Seeder;
class CourseManagementSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Manual & Auto Car','Auto Car','Manual Car','Scooter','Bike','Professional','Bicycle Course'] as $name) CourseType::firstOrCreate(['name'=>$name]);
        $city=City::firstOrCreate(['name'=>'Dhaka']);
        Branch::firstOrCreate(['city_id'=>$city->id,'name'=>'Kafrul Branch'],['address'=>'48/3, BRTC Staff Quarter Market, Senpara Parbata, Kafrul, Dhaka - 1216']);
    }
}
