<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function addVideo()
    {
        return view('admin.auth.admin_layouts.add-video');
    }

    public function listVideo()
    {
        return view('admin.auth.admin_layouts.list-videos');
    }
    public function showPlaylist(){
        return view('admin.auth.admin_layouts.show-playlist');
    }
    public function addYoutube()
    {
        $key = env('YOUTUBE_KEY');
        $base_url = env('BASE_URL');
        $client_id = env("GOOGLE_CLIENT_ID");
        $channel_id = env('CHANNEL_ID');
        $user_id = env('USER_ID');
        $maxResult = 1000;
        // dd($key);
        return view('admin.auth.admin_layouts.add-youtube');
    }

    public function listYoutube()
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
        // dd($feedback[0]->snippet->channelTitle); 
        // foreach($feedback as $fd){
        //   dd($fd->id->videoId);
        // }
          return view('admin.auth.admin_layouts.list-youtube-video', [
            "youtubeVids"=>$feedback
          ]);
        return view('admin.auth.admin_layouts.list-youtube-video');
    }
    
    public function category()
    {
        return view('admin.auth.admin_layouts.category');
    }
}
