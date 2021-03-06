<form action="{{ URL::to('/storeAgent') }}" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table>
        <tr>
            <td width="25%">
                <div class="col-sm-10">
                    <img class="form-control" name="imgpreview" src="{{ asset('common_image/no-image-icon-4.png') }}" height="200" alt="Image preview...">
                    <br>
                    <input type="file" class="form-control" onchange="previewFile()" name="file_propertyimage">
                </div>
            </td>
            <td>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" value="{{ old('fname') }}"  placeholder="Enter first name">
                            @if ($errors->has('fname'))
                                <span class="help-block">
                                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('fname') }}</strong>
                                </span>
                            @endif
                        </div>            
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" value="{{ old('lname') }}"  placeholder="Enter last name">
                            @if ($errors->has('lname'))
                                <span class="help-block">
                                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('lname') }}</strong>
                                </span>
                            @endif
                        </div>            
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact">Contact Number</label>
                            <input type="number" class="form-control" id="contact" name="contact" aria-describedby="contactHelp" autocomplete="off" value="{{ old('contact') }}" placeholder="Enter contact number">
                            <small id="contactHelp" class="form-text text-muted">Mobile/Phone number</small>
                            @if ($errors->has('contact'))
                                <span class="help-block">
                                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                        </div>            
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off"  id="name" value="{{ old('email') }}" placeholder="Enter email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>            
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </div>
                </div>
            </td>
        </tr>
    </table>
</form>