<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('posts_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\blogPosts::class, 'blog_posts_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Topics::class,'topics_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_topics');
    }
};
