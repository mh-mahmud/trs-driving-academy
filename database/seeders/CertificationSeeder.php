<?php
namespace Database\Seeders;
use App\Models\Certification;
use Illuminate\Database\Seeder;
class CertificationSeeder extends Seeder {public function run():void{if(Certification::exists())return;foreach(['Government of Bangladesh','Bangladesh Road Transport Authority','Dhaka Metropolitan Police','Global Alliance of NGOs for Road Safety'] as $i=>$name)Certification::create(['name'=>$name,'image'=>'assets/frontend/img/footer/certificate-'.($i+1).'.png','sort_order'=>$i]);}}
