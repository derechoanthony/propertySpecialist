<div class="row my-4">
    <div class="col-lg-12">
        <div class="form-group">
            <h4>Location</h4>
        </div>
         <hr>
    </div>       
    <div class="col-lg-4">
        <div class="form-group">
            <label><b>*</b>Province</label>
            <input type="text" name="txt_province" value="{{ old('txt_province') }}" class="form-control" placeholder="Please input province name...">
            @if ($errors->has('txt_province'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_province') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label><b>*</b>City</label>
            <input type="text" name="txt_city" value="{{ old('txt_city') }}" class="form-control" placeholder="Please input city name...">
            @if ($errors->has('txt_city'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_city') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Barangay</label>
            <input type="text" name="txt_brngy" value="{{ old('txt_brngy') }}" class="form-control" placeholder="Please input barangay name...">
            @if ($errors->has('txt_brngy'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_brngy') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="txt_address" value="{{ old('txt_address') }}" class="form-control" placeholder="Please input address name...">
            @if ($errors->has('txt_address'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_address') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>