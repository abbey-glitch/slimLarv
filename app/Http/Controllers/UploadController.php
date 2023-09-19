<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Video;
use Cloudinary\Asset\Video as AssetVideo;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UploadController extends Controller
{

public function store(Request $request){
    
        if($request->file("uploadingfile")){

            $file = $request->file("uploadingfile");

            $validation = Validator::make($request->all(), [
                'vid_name' => 'required',
                'vid_des' => 'required'
            ]); 

            if($validation->fails()){
                return back()->with([
                    "message" => "You did not input correct details"
                ]);
               
            }

                $vid_name = $request->vid_name;
                $vid_desc = $request->vid_des;
                $uploadingfile = $request->uploadingfile->getRealPath();
                $video_image = $request->video_image->getRealPath();
                $fileName = time().'_'.$file->getRealPath();
                $video_image = Cloudinary::upload($video_image)->getSecurePath();
                $uploadingfile= Cloudinary::uploadVideo($uploadingfile)->getSecurePath();
                //save to cloudinary database 
                
                $video = new Video;
                $video->vid_name = $vid_name;
                $video->vid_title = $vid_name;
                $video->vid_des = $vid_desc;
                $video->uploadingfile = $uploadingfile;
                $video->video_image = $video_image;
                // $uploadedFileUrl = cloudinary()->upload($uploadingfile)->getSecurePath();
                //dd($imgUrl);
                $video->save();
                //$file->move('uploads', $fileName);
                return back()
                ->with('success','File has been uploaded.');
                // ->with('file', $fileName);
        }else{

            return back()->with([
                "message" => "please upload a video"
            ]);

        }       
   }
}


