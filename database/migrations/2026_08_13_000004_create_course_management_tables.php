<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_types', function (Blueprint $table) {
            $table->id(); $table->string('name')->unique(); $table->boolean('is_active')->default(true); $table->timestamps();
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); $table->string('name')->unique(); $table->boolean('is_active')->default(true); $table->timestamps();
        });
        Schema::create('branches', function (Blueprint $table) {
            $table->id(); $table->foreignId('city_id')->constrained()->cascadeOnDelete(); $table->string('name'); $table->text('address')->nullable(); $table->boolean('is_active')->default(true); $table->timestamps();
            $table->unique(['city_id', 'name']);
        });
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); $table->foreignId('course_type_id')->constrained()->restrictOnDelete(); $table->foreignId('city_id')->constrained()->restrictOnDelete(); $table->foreignId('branch_id')->constrained()->restrictOnDelete();
            $table->string('title'); $table->decimal('fee', 10, 2)->default(0); $table->string('duration')->nullable(); $table->text('description')->nullable(); $table->string('image')->nullable(); $table->boolean('is_active')->default(true); $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses'); Schema::dropIfExists('branches'); Schema::dropIfExists('cities'); Schema::dropIfExists('course_types');
    }
};
