<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('blog_categories',function(Blueprint $table){$table->id();$table->string('name');$table->string('slug')->unique();$table->boolean('is_active')->default(true);$table->timestamps();});
        Schema::create('blogs',function(Blueprint $table){$table->id();$table->foreignId('blog_category_id')->constrained()->restrictOnDelete();$table->string('title');$table->string('slug')->unique();$table->longText('description')->nullable();$table->string('image')->nullable();$table->enum('status',['draft','published'])->default('draft');$table->timestamp('published_at')->nullable();$table->timestamps();});
    }
    public function down(): void {Schema::dropIfExists('blogs');Schema::dropIfExists('blog_categories');}
};
