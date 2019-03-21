<div class="row">
    <div class="col-lg-4" id="subtype">
    <div class="form-group">
        <label><b>*</b> SubType</label>
        
        <select name="slct_propertySubTypeHouse" 
            class="form-control {{  old('slct_propertyType') == ''? 'show' : old('slct_propertyType') == 'house'? 'show' : 'hidden' }}">
                <option value=""  {{ old('slct_propertySubTypeHouse') =='' ? 'selected' : '' }}>---</option>
                <option value="beach house" {{ old('slct_propertySubTypeHouse') =='' ? '' : old('slct_propertySubTypeHouse') == 'beach house' ? 'selected' : '' }}>Beach House</option>
                <option value="house" {{ old('slct_propertySubTypeHouse') =='' ? '' : old('slct_propertySubTypeHouse') == 'house' ? 'selected' : '' }}>House</option>
                <option value="lot" {{ old('slct_propertySubTypeHouse') =='' ? '' : old('slct_propertySubTypeHouse') == 'lot' ? 'selected' : '' }}>Lot</option>
                <option value="townhouse" {{ old('slct_propertySubTypeHouse') =='' ? '' : old('slct_propertySubTypeHouse') == 'townhouse' ? 'selected' : '' }}>Town House</option>
                <option value="other" {{ old('slct_propertySubTypeHouse') =='' ? '' : old('slct_propertySubTypeHouse') == 'other' ? 'selected' : '' }}>other</option>
        </select>
        
        <input type="hidden" value="" name="slct_propertySubTypeApartment">
        <select class="form-control {{ (old('slct_propertyType') === 'lot') ? 'show' : 'hidden' }}" name="slct_propertySubTypeLot"  >
                <option value="" {{ old('slct_propertySubTypeLot') =='' ? 'selected' : '' }} >---</option>
                <option value="agriculture" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                <option value="commercial" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'commercial' ? 'selected' :'' }}>Commercial</option>
                <option value="residential" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'residential' ? 'selected' :'' }}>Residential</option>
                <option value="memorial" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'memorial' ? 'selected' :'' }}>Memorial</option>
                <option value="beach" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'beach' ? 'selected' :'' }}>Beach</option>
                <option value="other" {{ old('slct_propertySubTypeLot') =='' ? '' : old('slct_propertySubTypeLot') == 'other' ? 'selected' :'' }}>Other</option>
        </select>
        
        <select class="form-control {{  (old('slct_propertyType') === 'condominium') ? 'show' : 'hidden' }}" name="slct_propertySubTypeCondominium"   >
            <option value="" {{ old('slct_propertySubTypeCondominium') =='' ? 'selected' : '' }}>---</option>
            <option value="studio" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == 'studio' ? 'selected' :'' }}>studio</option>
            <option value="1 bedroom" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == '1 bedroom' ? 'selected' :'' }}>1 Bedroom</option>
            <option value="2 bedroom" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == '2 bedroom' ? 'selected' :'' }}>2 Bedroom</option>
            <option value="3 bedroom" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == '3 bedroom' ? 'selected' :'' }}>3 Bedroom</option>
            <option value="4 bedroom" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == '4 bedroom' ? 'selected' :'' }}>4 Bedroom</option>
            <option value="penthouse" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == 'penthouse' ? 'selected' :'' }}>Penthouse</option>
            <option value="loft" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == 'loft' ? 'selected' :'' }}>Loft</option>
            <option value="condotel" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == 'condotel' ? 'selected' :'' }}>Condotel</option>
            <option value="other" {{ old('slct_propertySubTypeCondominium') =='' ? '' : old('slct_propertySubTypeCondominium') == 'other' ? 'selected' :'' }}>Other</option>
        </select>
        
        <select class="form-control {{  (old('slct_propertyType') === 'commercial')? 'show' : 'hidden' }}" name="slct_propertySubTypeCommercial" >
            <option value="" {{ old('slct_propertySubTypeCommercial') =='' ? 'selected' : '' }}>---</option>
            <option value="warehouse" {{ old('slct_propertySubTypeCommercial') =='' ? '' : old('slct_propertySubTypeCommercial') == 'warehouse' ? 'selected' :'' }}>Warehouse</option>
            <option value="building" {{ old('slct_propertySubTypeCommercial') =='' ? '' : old('slct_propertySubTypeCommercial') == 'building' ? 'selected' :'' }}>Building</option>
            <option value="office" {{ old('slct_propertySubTypeCommercial') =='' ? '' : old('slct_propertySubTypeCommercial') == 'office' ? 'selected' :'' }}>Office</option>
            <option value="retail" {{ old('slct_propertySubTypeCommercial') =='' ? '' : old('slct_propertySubTypeCommercial') == 'retail' ? 'selected' :'' }}>Retail</option>
        </select>
        @if ($errors->has('slct_propertySubTypeHouse'))
            <span class="help-block">
                <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_propertySubTypeHouse') }}</strong>
            </span>
        @endif
        @if ($errors->has('slct_propertySubTypeLot'))
            <span class="help-block">
                <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_propertySubTypeLot') }}</strong>
            </span>
        @endif
        @if ($errors->has('slct_propertySubTypeCondominium'))
            <span class="help-block">
                <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_propertySubTypeCondominium') }}</strong>
            </span>
        @endif
        @if ($errors->has('slct_propertySubTypeCommercial'))
            <span class="help-block">
                <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('slct_propertySubTypeCommercial') }}</strong>
            </span>
        @endif
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label><b>*</b>Title</label>
            <input type="text" name="txt_title" value="{{ old('txt_title') }}" class="form-control" placeholder="Please input property Title...">
            @if ($errors->has('txt_title'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txt_title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <label><b>*</b>Description</label>
            <textarea name="txtArea_description" rows="4" cols="50" class="form-control">{{ old('txtArea_description') }}</textarea>
            @if ($errors->has('txtArea_description'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txtArea_description') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
@include('pages.propertyEntry.propertydetails')
@include('pages.propertyEntry.lotproperty')
@include('pages.propertyEntry.commercialproperty')