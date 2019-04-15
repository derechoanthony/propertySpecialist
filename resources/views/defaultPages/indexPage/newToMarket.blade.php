<section class="probootstrap-section probootstrap-section-lighter">
<div class="container">
    <div class="row heading">
        <h2 class="mt0 mb50 text-center">NEW TO MARKET</h2>
    </div>
    <div class="row">

        @foreach($data as $value)
            @if( $value['slct_offerType'] == 'sell' ) 
                <div class="col-md-4 col-sm-6">
                    <div class="probootstrap-card probootstrap-listing">
                    <div class="probootstrap-card-media">
                        <img src="{{ asset('/storage/public/imageUpload/'.$value['_token'].'') }}" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading"><a href="#">{{ $value['txt_title'] }}</a></h2>
                        <div class="probootstrap-listing-location">
                        <i class="icon-location2"></i> <span>{{ $value['txt_address'] }}</span>
                        </div>
                            <div class="probootstrap-listing-category for-sale"><span>for sale</span></div>                        
                        <div class="probootstrap-listing-price"><strong>₱ {{ $value['txt_price'] }}</strong> </div>
                    </div>
                    <div class="probootstrap-card-extra">
                        <ul>
                        <li>
                            Area
                            <span>{{ $value['txt_lotarea'] }} m2</span>
                        </li>
                        <li>
                            Beds
                            <span>{{ $value['txt_bedrooms'] }}</span>
                        </li>
                        <li>
                            Baths
                            <span>{{ $value['txt_bathrooms'] }}</span>
                        </li>
                        <li>
                            Car Space
                            <span>{{ $value['txt_carspace'] }}</span>
                        </li>
                        </ul>
                    </div>
                    </div>
                    <!-- END listing -->
                </div>
                <div class="clearfix visible-sm-block"></div>
            @endif
        @endforeach
    
    
    </div>
</div>
</section>