<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration{public function up():void{Schema::table('site_settings',fn(Blueprint $t)=>$t->string('favicon')->nullable()->after('footer_logo'));}public function down():void{Schema::table('site_settings',fn(Blueprint $t)=>$t->dropColumn('favicon'));}};
