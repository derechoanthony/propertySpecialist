<div id="section1" class="{{ old('slct_propertyType') == ''? 'show' : old('slct_propertyType') == 'house'? 'show' : old('slct_propertyType') == 'apartment'? 'show' : old('slct_propertyType') == 'condominium'? 'show' : 'hidden' }}">
    <div class="row my-4">
        <div class="col-lg-12">
            <div class="form-group">
                <h4>Property Detail [section1]</h4>
            </div>
            <hr>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Bedrooms</label>
                <input type="text" name="txt_bedrooms" maxlength="10" value="{{ old('txt_bedrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input number of bedrooms...">
                @if ($errors->has('txt_bedrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_bedrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Bathrooms</label>
                <input type="text" name="txt_bathrooms" maxlength="10" value="{{ old('txt_bathrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input number of bathrooms...">
                @if ($errors->has('txt_bathrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_bathrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Rooms Total</label>
                <input type="text" name="txt_totalrooms" maxlength="10" value="{{ old('txt_totalrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input total rooms...">
                @if ($errors->has('txt_totalrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_totalrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row propertydetail">
        <div class="col-lg-5">
            <div class="form-group">
                <label>Floor Area ( m<sup>2</sup> )</label>
                <input type="text" name="txt_flrarea" maxlength="10" value="{{ old('txt_flrarea') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input floor area...">
                @if ($errors->has('txt_flrarea'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_flrarea') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Car Space</label>
                <input type="text" name="txt_carspace" maxlength="10" value="{{ old('txt_carspace') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input car space...">
                @if ($errors->has('txt_carspace'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_carspace') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Year Built</label>
                <select class="yearselect form-control" name="slct_yearbuilt"></select>
                @if ($errors->has('slct_yearbuilt'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_yearbuilt') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Classification</label>
                <select class="form-control" name="slct_clasification">
                    <option value="" {{ old('slct_clasification') =='' ? 'selected' : '' }}>---</option>
                    <option value="pre-selling" {{ old('slct_clasification') =='pre-selling' ? 'selected' : '' }}>Pre Selling</option>
                    <option value="ready for occupancy" {{ old('slct_clasification') =='ready for occupancy' ? 'selected' : '' }}>Ready for Occupancy</option>
                    <option value="resale" {{ old('slct_clasification') =='resale' ? 'selected' : '' }}>Resale</option>
                    <option value="forclosed" {{ old('slct_clasification') =='forclosed' ? 'selected' : '' }}>Forclosed</option>
                </select>
                @if ($errors->has('slct_clasification'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_clasification') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Fully Furnished</label>
                <select class="form-control" name="slct_fullyfurnished">
                    <option value="" {{ old('slct_fullyfurnished') =='' ? 'selected' : '' }}>---</option>
                    <option value="yes" {{ old('slct_fullyfurnished') =='yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ old('slct_fullyfurnished') =='no' ? 'selected' : '' }}>No</option>
                    <option value="semi" {{ old('slct_fullyfurnished') =='semi' ? 'selected' : '' }}>Semi</option>
                </select>
                @if ($errors->has('slct_fullyfurnished'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_fullyfurnished') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Lot Area ( m<sup>2</sup> )</label>
                <input type="text" name="txt_lotarea" maxlength="10" value="{{ old('txt_lotarea') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input lot area...">
                @if ($errors->has('txt_lotarea'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_lotarea') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Subdivision Name</label>
                <input type="text" name="txt_subdivisionname" value="{{ old('txt_subdivisionname') }}" data-bv-integer="true" class="form-control"  placeholder="Please input subdivision name...">
                @if ($errors->has('txt_subdivisionname'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_subdivisionname') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Block lot/unit number</label>
                <input type="text" name="txt_blckunitnumber" maxlength="10" value="{{ old('txt_blckunitnumber') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)"  placeholder="Please input block lot/unit number...">
                @if ($errors->has('txt_blckunitnumber'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_blckunitnumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>