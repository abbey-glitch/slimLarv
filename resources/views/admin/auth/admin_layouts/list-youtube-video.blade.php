@extends('layouts.app')

@include("includes.side-nav")

<div class='row'>
        <div class='col-md-12' style="width: 77%;">

            <div id="main_content_wrap">

                <h1 class='text-center'>Admin - List YouTube Playlist</h1>
                <hr>
                <div class="row">
                @if(count($youtubeVids)==0)
                    <div class='alert alert-info'>you have no video at the moment</div>
                @else
                    @foreach($youtubeVids as $youtubeVid)
                    @if(isset($youtubeVid->id->videoId) )
                       <div class='card'>
                            <div class='card-body'>
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $youtubeVid->id->videoId }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class='card-footer'>
                                <p>{{$youtubeVid->snippet->title}}</p>
                                <p>{{$youtubeVid->snippet->channelTitle}}</p>
                            </div>
                         </div>
                    @endif
                       
                    @endforeach
                @endif
                </div>
               
            </div>
        </div>
    </div>


    </div>

</div>




    </div>

</div>
