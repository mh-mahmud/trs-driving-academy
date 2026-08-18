<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        DB::table('courses')->orderBy('id')->get()->each(function ($course): void {
            $base = Str::slug($course->title) ?: 'course';
            $slug = $base;
            $suffix = 2;
            while (DB::table('courses')->where('slug', $slug)->where('id', '!=', $course->id)->exists()) {
                $slug = $base.'-'.$suffix++;
            }
            DB::table('courses')->where('id', $course->id)->update(['slug' => $slug]);
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
