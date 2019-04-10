@extends('frontLayouts.app')

@section('content')
<section class="probootstrap-slider flexslider2 page-inner">
    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="page-title probootstrap-animate">
              <h1>Terms & Conditions</h1>
            </div>

          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url({{ asset('external/img/slider_1.jpg') }});"></li>
      <li style="background-image: url({{ asset('external/img/slider_4.jpg') }});"></li>
      <li style="background-image: url({{ asset('external/img/slider_2.jpg') }});"></li>
    </ul>
  </section>
@endsection