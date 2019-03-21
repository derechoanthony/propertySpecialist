<div id="section2" class="{{ $property->slct_propertyType == 'lot'? 'show' : 'hidden'}}">
    <div class="row my-4">
        <div class="col-lg-12">
            <div class="form-group">
                <h4>Property Detail  [section2]</h4>
            </div>
            <hr>
        </div>            
            <div class="col-lg-5">
                <div class="form-group">
                    <label >Lot Area ( m<sup>2</sup> )</label>
                    <input type="text" name="txt_lot_lotArea" maxlength="10" value="{{ $property->txt_lot_lotArea }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)" placeholder="Please input number of bedrooms...">
                    @if ($errors->has('txt_lot_lotArea'))
                        <span class="help-block">
                            <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_lot_lotArea') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Classification</label>
                    <select class="form-control" name="slct_lot_clasification">
                        <option value="" {{ $property->slct_lot_clasification =='' ? 'selected' : '' }}>---</option>
                        <option value="pre-selling" {{ $property->slct_lot_clasification =='pre-selling' ? 'selected' : '' }}>Pre Selling</option>
                        <option value="ready for occupancy" {{ $property->slct_lot_clasification =='ready for occupancy' ? 'selected' : '' }}>Ready for Occupancy</option>
                        <option value="resale" {{ $property->slct_lot_clasification =='resale' ? 'selected' : '' }}>Resale</option>
                        <option value="forclosed" {{ $property->slct_lot_clasification =='forclosed' ? 'selected' : '' }}>Forclosed</option>
                    </select>
                    @if ($errors->has('slct_lot_clasification'))
                        <span class="help-block">
                            <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_lot_clasification') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Subdivision Name</label>
                    <input type="text" name="txt_lot_subdivisionname" value="{{ $property->txt_lot_subdivisionname }}" class="form-control"  placeholder="Please input subdivision name...">
                    @if ($errors->has('txt_lot_subdivisionname'))
                        <span class="help-block">
                            <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_lot_subdivisionname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Block lot/unit number</label>
                    <input type="text" name="txt_lot_blckunitnumber" maxlength="10" value="{{ $property->txt_lot_blckunitnumber }}" data-bv-integer="true" class="form-control" onkeypress="return isNumber(event)"  placeholder="Please input block lot/unit number...">
                    @if ($errors->has('txt_lot_blckunitnumber'))
                        <span class="help-block">
                            <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_lot_blckunitnumber') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        
    </div>
</div>