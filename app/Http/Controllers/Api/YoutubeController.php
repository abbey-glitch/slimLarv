<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Youtube_videos;
use Dawson\Youtube\Youtube;

class YoutubeController extends Controller
{
    //
    public function getPlaylists()
    {
        $key = env('YOUTUBE_KEY');
        $base_url = env('BASE_URL');
        $client_id = env("GOOGLE_CLIENT_ID");
        $channel_id = env('CHANNEL_ID');
        $user_id = env('USER_ID');
        $maxResult = 1000;
        $api_url = $base_url."search?order=date&part=snippet&channelId=".$channel_id."&maxResult".$maxResult."&key=".$key;
        $response = Http::get($api_url);
        $feedback= json_decode($response->body())->items;
        dd($feedback); 
        // foreach($feedback as $fd){
        //   dd($fd->id->videoId);
        // }
          return view('admin.auth.admin_layouts.list-youtube-video', [
            "youtubeVids"=>$feedback
          ]);
    }
}
