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
        Schema::create('image_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->constrained('images');
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('is_like')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_likes');
    }
};
