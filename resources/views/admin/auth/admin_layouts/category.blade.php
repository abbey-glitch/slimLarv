@extends('layouts.app')

@include("includes.side-nav")

        <div class='row'>
            <div class='col-md-12' style="width: 77%;">
                <div id="main_content_wrap">

                    <h1 class='text-center'>Admin - Video Categories</h1>
                    <br>
                    <p>Here you can add new categories, view, modify and delete any category of choice.</p>
                    <hr>
                    <div id="categories">
                        <div id="add_cat">
                            <form  action="" method="post" class='form'>
                                @csrf
                                <fieldset>

                                    <div class='well'>
                                        <h4>Add New Category</h4>
                                        <hr>
                                    <div class="form-group">
                                        <label>Permalink </label>
                                        <input autofocus class="form-control" name="permalink" placeholder="Permalink"         
                                    onfocus="if(this.placeholder =='Permalink') {this.placeholder=''; }"
                                    onblur="if(this.placeholder==''){this.placeholder='Permalink';}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Name </label>
                                        <input autofocus class="form-control" name="c_name" placeholder="Category Name"         
                                    onfocus="if(this.placeholder =='Category Name') {this.placeholder=''; }"
                                    onblur="if(this.placeholder==''){this.placeholder='Category Name';}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <input autofocus class="form-control" name="parent_category" placeholder="Parent Category"         
                                    onfocus="if(this.placeholder =='Parent Category') {this.placeholder=''; }"
                                    onblur="if(this.placeholder==''){this.placeholder='Parent Category';}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Title</label> 
                                        <input class="form-control" name="c_title" placeholder="Category Title"         
                                    onfocus="if(this.placeholder =='Category Title') {this.placeholder=''; }"
                                    onblur="if(this.placeholder==''){this.placeholder='Category Title';}" type="text">
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
                                    <label>Category Description </label>
                                        <textarea class="form-control" id="myTextarea" name="c_desc" rows="2" placeholder="Category Description"         
                                    onfocus="if(this.placeholder =='Category Description') {this.placeholder=''; }"
                                    onblur="if(this.placeholder==''){this.placeholder='Category Description';}"></textarea>
                                    </div>
                                    </div>
                                    
                                    <input type='hidden' name='admin_id' id='add_video_admin_id' value="">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="addvideo" value="addvideo">Add Video</button>
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

                    <table class="list_cats_wrap">
                    <tr>
                        <td class="caption">Name</td>
                        <td id="cat_desc">Description</td>
                        <td class="caption">Permalink</td>
                    </tr>
                    <tr>
                        <td id="listcat">Default</td>
                        <td id="listcat">This is the default category</td>
                        <td id="listcat">default</td>
                    </tr>
                    <tr>
                        <td id="listcat">Conflict Resolution</td>
                        <td id="listcat">This category is for posting data about general resolution of issues and conflicts.</td>
                        <td id="listcat">conflict-resolution</td>
                    </tr>
                    <tr>
                        <td id="listcat">__ Family Reconsiliation</td>
                        <td id="listcat">This place is for posting how family members are being reconciled.</td>
                        <td id="listcat">family-reconciliation</td>
                    </tr>
                    <tr>
                        <td id="listcat">__ __ Marital Issues</td>
                        <td id="listcat">This place is for posting how husbands and wives are being reconciled.</td>
                        <td id="listcat">marital-issues</td>
                    </tr>
                    </table>


                </div>
                <br>

            </div>
        </div>
    </div>

</div>
