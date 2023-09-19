<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube_videos extends Model
{
    use HasFactory;

    public $table = 'youtube_video';
    protected $fillable = [
          'ytube_video_id',
          'permalink',
          'v_name',
          'v_title',
          'meta_keywords',
          'meta_description',
          'short_desc',
          'v_desc',
          'admin_id', 
        ];
}
