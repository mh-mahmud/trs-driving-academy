<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::table('site_settings', fn(Blueprint $t) => $t->string('achievement_title')->default('Achieve your Goals with PATHWAY DRIVING TRAINING SCHOOL'));
        Schema::create('achievement_stats', function(Blueprint $t) {$t->id();$t->string('value');$t->string('label');$t->string('icon_class')->default('fas fa-star');$t->string('icon_color',20)->default('#F15A26');$t->unsignedInteger('sort_order')->default(0);$t->boolean('is_active')->default(true);$t->timestamps();});
    }
    public function down(): void {Schema::dropIfExists('achievement_stats');Schema::table('site_settings',fn(Blueprint $t)=>$t->dropColumn('achievement_title'));}
};
