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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('permalink')->nullable();
            $table->string('vid_name');
            $table->string('vid_title');
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('vid_des');
            $table->string('video_image')->nullable();
            $table->string('uploadingfile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
