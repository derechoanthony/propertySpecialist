<link rel="stylesheet" href="{{ asset('external/default/css/styles-merged.css') }}">
<link rel="stylesheet" href="{{ asset('external/default/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('external/default/css/custom.css') }}">

@if (Request::is('register'))  
    <link href="{{ asset('css/stepper.css') }}" rel="stylesheet" />
@endif