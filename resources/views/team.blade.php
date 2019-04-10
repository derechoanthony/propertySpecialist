
@extends('frontLayouts.app')

@section('content')
<section class="probootstrap-section probootstrap-section-lighter">
<div class="container">
    <div class="row heading">
    <h2 class="mt0 mb50 text-center">Our Agents</h2>
    </div>
    <div class="row">
            @foreach($data as $value)
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-card probootstrap-person text-left">
                    <div class="probootstrap-card-media">
                        <img src="{{ asset('/storage/public/imageUpload/'.$value['image'].'') }}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">{{ $value['fname'] }} {{ $value['lname'] }}</h2>
                        <p><small>Real Estate Brooker</small></p>
                    </div>
                    </div>
                </div>
            @endforeach
      </div>
    </div>
  </section>


@endsection