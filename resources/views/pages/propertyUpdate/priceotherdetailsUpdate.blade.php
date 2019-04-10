<div class="row my-4">
    <div class="col-lg-12">
        <div class="form-group">
            <h4>Price and Other Detail</h4>
        </div>
         <hr>
    </div>       
    <div class="col-lg-5">
        <div class="form-group">
            <label><b>*</b>Price</label>
            <input type="text" name="txt_price" value="{{ $property->txt_price }}" class="form-control" placeholder="Please input price...">
            @if ($errors->has('txt_price'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_price') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            <label>Object ID</label>
            <input type="text" name="txt_objectid" value="{{ $property->txt_objectid }}" class="form-control" placeholder="Please input object id...">
            @if ($errors->has('txt_objectid'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_objectid') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            @if(Request::is('updateproperty*')) 
                <label>Upload Image</label>
                <input type="file" class="form-control" onchange="previewFile()" name="file_propertyimage"><br>
            @else
                <label>Image Uploaded</label><br>
            @endif
            <img class="form-control" name="imgpreview" src="{{ asset('/storage/public/imageUpload/'.$property->_token) }}" height="200" alt="Image preview...">
        </div>
    </div>
    <div class="col-lg-5 hidden">
        <div class="form-group">
            <label>Upload Videos</label>
            
        </div>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            <label>Youtube Url</label>
            <input type="text" name="txt_youtubeurl" value="{{ $property->txt_youtubeurl }}" class="form-control" placeholder="Please input youtube url...">
            @if ($errors->has('txt_youtubeurl'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_youtubeurl') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>