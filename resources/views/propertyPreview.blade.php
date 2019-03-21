@extends('layouts.app')

@section('content')
<section class="dashboard-counts section-padding">
   <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <div class="brand-text d-none d-md-inline-block header-font">
                    <span>Propert Entry Form</span>
                  </div>
                </div>
                <div class="card-body">
                  <form action="{{ URL::to('/updateProperty/'.$property->id.'/property') }}" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST" >
                     {{ csrf_field() }}
                     <input type="hidden" name="_token" value="{{ $property->_orig_token }}">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="_label">Entry Number: <span>{{ $property->id }}</span></label>
                          <input type="hidden" name="id" value="{{ $property->id }}">                          
                        </div>
                        <div class="form-group">
                          <label class="_label">Date Created: <span>{{ $property->created_at }}</span></label>
                        </div>
                        <hr>
                      </div>
                      <hr>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label><b>*</b>Offer Type</label>
                          <select name="slct_offerType" class="form-control">
                            
                            <option value="sell" {{ $property->slct_offerType == 'sell' ? 'selected' : '' }}>Sell</option>
                            <option value="rent" {{ $property->slct_offerType == 'rent' ? 'selected' : '' }}>Rent</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">       
                          <label><b>*</b>Property Type</label>
                          <select name="slct_propertyType" class="form-control">
                            <option value="house" {{ $property->slct_propertyType == 'house' ? 'selected' : '' }}>House</option>
                            <option value="lot" {{ $property->slct_propertyType == 'lot' ? 'selected' : '' }}>Lot</option>
                            <option value="apartment" {{ $property->slct_propertyType == 'apartment' ? 'selected' : '' }}>Apartment</option>
                            <option value="commercial" {{ $property->slct_propertyType == 'commercial' ? 'selected' : '' }}>Commercial</option>
                            <option value="condominium" {{ $property->slct_propertyType == 'condominium' ? 'selected' : '' }}>Condominium</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    @include('pages.propertyUpdate.subtypeUpdate')
                    @include('pages.propertyUpdate.priceotherdetailsUpdate')
                    @include('pages.propertyUpdate.locationUpdate')
                    @if(Request::is('updateproperty*'))
                      <div class="form-group ">       
                        <input type="submit" value="Update" class="btn btn-primary">
                      </div>
                    @endif
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- <img class="user_avatar" src="{{ asset('storage/x0QPbFWOYuHoti0iOzYXdW3Pk03nzuyLo2RJ5yrb.png') }}"> --}}

   </div>
</section>
{{-- xxx
{{ $property->slct_propertyType }}
{{ $property->txt_title }} --}}
@endsection