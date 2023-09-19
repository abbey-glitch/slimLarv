@extends('layouts.app')

@include("includes.side-nav")
    <div class='row'>
        <div class='col-md-12' style="width: 77%;">

            <div id="main_content_wrap">

                <h1 class='text-center'>Admin - Add a YouTube Video</h1>
                <hr>

                <form  action="{{url('video'}}" enctype="multipart/form-data" method="post" class='form'>
                @csrf
                    <fieldset>

                        <div class='well'>
                            <h4>General Video Settings</h4>
                            <hr>
                        <div class="form-group">
                            <label>YouTube Video ID </label>
                            <input autofocus class="form-control" name="ytube_video_id" placeholder="YouTube Video ID"         
                        onfocus="if(this.placeholder =='YouTube Video ID') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='YouTube Video ID';}" type="text">
                        </div>
                        <div class="form-group">
                            <label>Permalink </label>
                            <input autofocus class="form-control" name="permalink" placeholder="Permalink"         
                        onfocus="if(this.placeholder =='Permalink') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Permalink';}" type="text">
                        </div>
                        <div class="form-group">
                            <label>Video Name </label>
                            <input autofocus class="form-control" name="v_name" placeholder="Video Name"         
                        onfocus="if(this.placeholder =='Video Name') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Video Name';}" type="text">
                        </div>
                        <div class="form-group">
                            <label>Video Title</label> 
                            <input class="form-control" name="v_title" placeholder="Video Title"         
                        onfocus="if(this.placeholder =='Video Title') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Video Title';}" type="text">
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <textarea class="form-control" name="meta_keywords" cols="32" rows="2" placeholder="Meta Keywords"         
                        onfocus="if(this.placeholder =='Meta Keywords') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Meta Keywords';}"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control" name="meta_description" cols="32" rows="2" placeholder="Meta Description"         
                        onfocus="if(this.placeholder =='Meta Description') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Meta Description';}"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Short Description </label>
                            <textarea class="form-control" name="short_desc" cols="32" rows="2" placeholder="Short Description"         
                        onfocus="if(this.placeholder =='Short Description') {this.placeholder=''; }"
                        onblur="if(this.placeholder==''){this.placeholder='Short Description';}" maxlength="185"></textarea>
                        </div>
                        <div class="form-group">
                        <label> Description </label>
                            <textarea class="form-control" id="myTextarea" name="v_desc" rows="2" placeholder="Video Description"></textarea>
                        </div>
                        </div>
                        
                        <input type='hidden' name='admin_id' id='add_video_admin_id' value="">
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="addvideo" value="addvideo">Add YouTube Video</button>
                        </div>
                    </fieldset>
                                <div class="form-group">
                                    <div class="progress" id="progressDiv" style="display:none;">
                                        <progress id="progressBar" value="0" max="100" style="width:100%; height: 1.2rem;"></progress>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h3 id="status"></h3>
                                    <p id="uploaded_progress"></p>
                                </div>
                </form>
            </div>
        </div>
    </div>


    </div>

</div>
