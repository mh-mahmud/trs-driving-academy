<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up():void{Schema::table('site_settings',fn(Blueprint $table)=>$table->string('certification_title')->default('Certified By:')->after('copyright_text'));Schema::create('certifications',function(Blueprint $table){$table->id();$table->string('name');$table->string('image');$table->unsignedInteger('sort_order')->default(0);$table->boolean('is_active')->default(true);$table->timestamps();});}
 public function down():void{Schema::dropIfExists('certifications');Schema::table('site_settings',fn(Blueprint $table)=>$table->dropColumn('certification_title'));}
};
