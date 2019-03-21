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
                  <form action="{{ URL::to('/store') }}" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST" >
                     {{ csrf_field() }}
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label><b>*</b>Offer Type</label>
                          <select name="slct_offerType" class="form-control">
                            
                            <option value="sell">Sell</option>
                            <option value="rent">Rent</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">       
                          <label><b>*</b>Property Type</label>
                          <select name="slct_propertyType" class="form-control">
                            <option value="house" {{ old('slct_propertyType') =='' ? 'selected' : old('slct_propertyType') =='house' ? 'selected':'' }}>House</option>
                            <option value="lot" {{ old('slct_propertyType') =='' ? '' : old('slct_propertyType') =='lot' ? 'selected':'' }}>Lot</option>
                            <option value="apartment" {{ old('slct_propertyType') =='' ? '' : old('slct_propertyType') =='apartment' ? 'selected':'' }}>Apartment</option>
                            <option value="commercial" {{ old('slct_propertyType') =='' ? '' : old('slct_propertyType') =='commercial' ? 'selected':'' }}>Commercial</option>
                            <option value="condominium" {{ old('slct_propertyType') =='' ? '' : old('slct_propertyType') =='condominium' ? 'selected':'' }}>Condominium</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    @include('pages.propertyEntry.subtype')
                    @include('pages.propertyEntry.priceotherdetails')
                    @include('pages.propertyEntry.location')

                    <div class="form-group">       
                      <input type="submit" value="Save" class="btn btn-primary">
                      <input type="submit" value="Clear" class="btn btn-danger">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- <img class="user_avatar" src="{{ asset('storage/x0QPbFWOYuHoti0iOzYXdW3Pk03nzuyLo2RJ5yrb.png') }}"> --}}

   </div>
</section>
@endsection