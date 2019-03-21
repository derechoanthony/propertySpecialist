<div class="row">
    <div class="col-lg-4" id="subtype">
    <div class="form-group">
        <label><b>*</b> SubType</label>
        
        <select name="slct_propertySubTypeHouse" 
            class="form-control {{  $property->slct_propertyType == ''? 'show' : $property->slct_propertyType == 'house'? 'show' : 'hidden' }}">
                <option value=""  {{  $property->slct_propertySubTypeHouse =='' ? 'selected' : '' }}>---</option>
                <option value="beach house" {{ $property->slct_propertySubTypeHouse =='' ? '' : $property->slct_propertySubTypeHouse == 'beach house' ? 'selected' : '' }}>Beach House</option>
                <option value="house" {{ $property->slct_propertySubTypeHouse =='' ? '' : $property->slct_propertySubTypeHouse == 'house' ? 'selected' : '' }}>House</option>
                <option value="lot" {{ $property->slct_propertySubTypeHouse =='' ? '' : $property->slct_propertySubTypeHouse == 'lot' ? 'selected' : '' }}>Lot</option>
                <option value="townhouse" {{ $property->slct_propertySubTypeHouse =='' ? '' : $property->slct_propertySubTypeHouse == 'townhouse' ? 'selected' : '' }}>Town House</option>
                <option value="other" {{ $property->slct_propertySubTypeHouse =='' ? '' : $property->slct_propertySubTypeHouse == 'other' ? 'selected' : '' }}>other</option>
        </select>
        
        <input type="hidden" value="" name="slct_propertySubTypeApartment">
        <select class="form-control {{ ($property->slct_propertyType === 'lot') ? 'show' : 'hidden' }}" name="slct_propertySubTypeLot"  >
                <option value="" {{ $property->slct_propertySubTypeLot =='' ? 'selected' : '' }} >---</option>
                <option value="agriculture" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                <option value="commercial" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'commercial' ? 'selected' :'' }}>Commercial</option>
                <option value="residential" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'residential' ? 'selected' :'' }}>Residential</option>
                <option value="memorial" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'memorial' ? 'selected' :'' }}>Memorial</option>
                <option value="beach" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'beach' ? 'selected' :'' }}>Beach</option>
                <option value="other" {{ $property->slct_propertySubTypeLot =='' ? '' : $property->slct_propertySubTypeLot == 'other' ? 'selected' :'' }}>Other</option>
        </select>
        
        <select class="form-control {{  ($property->slct_propertyType === 'condominium') ? 'show' : 'hidden' }}" name="slct_propertySubTypeCondominium"   >
            <option value="" {{ $property->slct_propertySubTypeCondominium =='' ? 'selected' : '' }}>---</option>
            <option value="studio" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == 'studio' ? 'selected' :'' }}>studio</option>
            <option value="1 bedroom" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == '1 bedroom' ? 'selected' :'' }}>1 Bedroom</option>
            <option value="2 bedroom" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == '2 bedroom' ? 'selected' :'' }}>2 Bedroom</option>
            <option value="3 bedroom" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == '3 bedroom' ? 'selected' :'' }}>3 Bedroom</option>
            <option value="4 bedroom" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == '4 bedroom' ? 'selected' :'' }}>4 Bedroom</option>
            <option value="penthouse" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == 'penthouse' ? 'selected' :'' }}>Penthouse</option>
            <option value="loft" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == 'loft' ? 'selected' :'' }}>Loft</option>
            <option value="condotel" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == 'condotel' ? 'selected' :'' }}>Condotel</option>
            <option value="other" {{ $property->slct_propertySubTypeCondominium =='' ? '' : $property->slct_propertySubTypeCondominium == 'other' ? 'selected' :'' }}>Other</option>
        </select>
        
        <select class="form-control {{  ($property->slct_propertyType === 'commercial')? 'show' : 'hidden' }}" name="slct_propertySubTypeCommercial" >
            <option value="" {{ $property->slct_propertySubTypeCommercial =='' ? 'selected' : '' }}>---</option>
            <option value="warehouse" {{ $property->slct_propertySubTypeCommercial =='' ? '' : $property->slct_propertySubTypeCommercial == 'warehouse' ? 'selected' :'' }}>Warehouse</option>
            <option value="building" {{ $property->slct_propertySubTypeCommercial =='' ? '' : $property->slct_propertySubTypeCommercial == 'building' ? 'selected' :'' }}>Building</option>
            <option value="office" {{ $property->slct_propertySubTypeCommercial =='' ? '' : $property->slct_propertySubTypeCommercial == 'office' ? 'selected' :'' }}>Office</option>
            <option value="retail" {{ $property->slct_propertySubTypeCommercial =='' ? '' : $property->slct_propertySubTypeCommercial == 'retail' ? 'selected' :'' }}>Retail</option>
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
            <input type="text" name="txt_title" value="{{ $property->txt_title }}" class="form-control" placeholder="Please input property Title...">
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
            <textarea name="txtArea_description" rows="4" cols="50" class="form-control">{{ $property->txtArea_description }}</textarea>
            @if ($errors->has('txtArea_description'))
                <span class="help-block">
                    <strong><img src="{{ asset('common_image/warning.png') }}"> {{ $errors->first('txtArea_description') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
@include('pages.propertyUpdate.propertydetailsUpdate')
@include('pages.propertyUpdate.lotpropertyUpdate')
@include('pages.propertyUpdate.commercialpropertyUpdate')