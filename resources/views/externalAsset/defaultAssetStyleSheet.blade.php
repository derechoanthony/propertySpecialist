<link rel="stylesheet" href="{{ asset('external/default/css/styles-merged.css') }}">
<link rel="stylesheet" href="{{ asset('external/default/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('external/default/css/custom.css') }}">

@if (Request::is('register'))  
    <link href="{{ asset('css/stepper.css') }}" rel="stylesheet" />
    {{--  <link rel="stylesheet" href="{{ asset('stepper/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
	<link rel="stylesheet" href="{{ asset('stepper/css/style.css') }}">  --}}
@endif