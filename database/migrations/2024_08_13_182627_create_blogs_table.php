<?php

use App\Models\Auther;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Auther::class);
            $table->foreignIdFor(Category::class);
            $table->string('title');
            $table->string('body');
            $table->string('thumbnail');
            $table->integer('like_count');
            $table->integer('comments_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
