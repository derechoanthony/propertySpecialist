<div id="section3" class="{{ old('slct_propertyType') == 'commercial'? 'show' : 'hidden'}}">
    <div class="row my-4">
        <div class="col-lg-12">
            <div class="form-group">
                <h4>Property Detail  [section3]</h4>
                <hr>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Bedrooms</label>
                <input type="text" name="txt_com_bedrooms" maxlength="10" value="{{ old('txt_com_bedrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input number of bedrooms...">
                @if ($errors->has('txt_com_bedrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_bedrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Bathrooms</label>
                <input type="text" name="txt_com_bathrooms" maxlength="10" value="{{ old('txt_com_bathrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input number of bathrooms...">
                @if ($errors->has('txt_com_bathrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_bathrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Rooms Total</label>
                <input type="text" name="txt_com_totalrooms" maxlength="10" value="{{ old('txt_com_totalrooms') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input total rooms...">
                @if ($errors->has('txt_com_totalrooms'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_totalrooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row propertydetail">
        <div class="col-lg-5">
            <div class="form-group">
                <label>Floor Area ( m<sup>2</sup> )</label>
                <input type="text" name="txt_com_flrarea" maxlength="10" value="{{ old('txt_com_flrarea') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input floor area...">
                @if ($errors->has('txt_com_flrarea'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_flrarea') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Floor Total</label>
                <input type="text" name="txt_com_flrtotal" maxlength="10" value="{{ old('txt_com_flrtotal') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input floor total...">
                @if ($errors->has('txt_com_flrtotal'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_flrtotal') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Car Space</label>
                <input type="text" name="txt_com_carspace" maxlength="10" value="{{ old('txt_com_carspace') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input car space...">
                @if ($errors->has('txt_com_carspace'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_carspace') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Year Built</label>
                <select class="yearselect form-control" name="slct_com_yearbuilt"></select>
                @if ($errors->has('slct_com_yearbuilt'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_com_yearbuilt') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Classification</label>
                <select class="form-control" name="slct_com_clasification">
                    <option value="" {{ old('slct_com_clasification') =='' ? 'selected' : '' }}>---</option>
                    <option value="pre-selling" {{ old('slct_com_clasification') =='pre-selling' ? 'selected' : '' }}>Pre Selling</option>
                    <option value="ready for occupancy" {{ old('slct_com_clasification') =='ready for occupancy' ? 'selected' : '' }}>Ready for Occupancy</option>
                    <option value="resale" {{ old('slct_com_clasification') =='resale' ? 'selected' : '' }}>Resale</option>
                    <option value="forclosed" {{ old('slct_com_clasification') =='forclosed' ? 'selected' : '' }}>Forclosed</option>
                </select>
                @if ($errors->has('slct_com_clasification'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_com_clasification') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Fully Furnished</label>
                <select class="form-control" name="slct_com_fullyfurnished">
                    <option value="" {{ old('slct_com_fullyfurnished') =='' ? 'selected' : '' }}>---</option>
                    <option value="yes" {{ old('slct_com_fullyfurnished') =='yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ old('slct_com_fullyfurnished') =='no' ? 'selected' : '' }}>No</option>
                    <option value="semi" {{ old('slct_com_fullyfurnished') =='semi' ? 'selected' : '' }}>Semi</option>
                </select>
                @if ($errors->has('slct_com_fullyfurnished'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_com_fullyfurnished') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Lot Area ( m<sup>2</sup> )</label>
                <input type="text" name="txt_com_lotarea" maxlength="10" value="{{ old('txt_com_lotarea') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input lot area...">
                @if ($errors->has('txt_com_lotarea'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_lotarea') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Subdivision Name</label>
                <input type="text" name="txt_com_subdivisionname" value="{{ old('txt_com_subdivisionname') }}" data-bv-integer="true" class="form-control"  placeholder="Please input subdivision name...">
                @if ($errors->has('txt_com_subdivisionname'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_subdivisionname') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Block lot/unit number</label>
                <input type="text" name="txt_com_blckunitnumber" value="{{ old('txt_com_blckunitnumber') }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)"  placeholder="Please input block lot/unit number...">
                @if ($errors->has('txt_com_blckunitnumber'))
                    <span class="help-block">
                        <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_com_blckunitnumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>