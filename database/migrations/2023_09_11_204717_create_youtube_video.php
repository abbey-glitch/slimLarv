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
        Schema::create('youtube_video', function (Blueprint $table) {
            $table->id();
            $table->string('ytube_video_id')->nullable();
            $table->string('permalink');
            $table->string('v_name');
            $table->string('v_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('short_desc');
            $table->string('v_desc')->nullable();
            $table->string('admin_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youtube_video');
    }
};
