<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PropertySpecialist') }}</title>
    @include('externalAsset.externalAssetStyleSheet')

</head>
<body>
@guest
    @yield('content')
@else
    @include('fixLayout.sideBar')
    <div class="page">
      <!-- navbar-->
        @include('fixLayout.headerNav')
        <nav class="breadcrumb">
            @if (Request::is('home'))  
                <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
                <a class="breadcrumb-item active">Dashboard</a>
            @elseif (Request::is('NewProperty'))
                <a class="breadcrumb-item" href="{{ url('NewProperty') }}">NewProperty</a>
                <a class="breadcrumb-item active">Entry</a>
            @elseif (Request::is('preview*'))
                <a class="breadcrumb-item" href="{{ url('NewProperty') }}">Property</a>
                <a class="breadcrumb-item active">Preview</a>
            @elseif (Request::is('updateproperty*'))
                <a class="breadcrumb-item" href="{{ url('NewProperty') }}">Property</a>
                <a class="breadcrumb-item active">Update</a>
            @elseif (Request::is('PropertyList'))
                <a class="breadcrumb-item" href="{{ url('PropertyList') }}">Property</a>
                <a class="breadcrumb-item active">List</a>
            @endif
        </nav>
            @yield('content')
      @include('fixLayout.footer')
    </div>
@endguest
@include('externalAsset.externalAssetScript')

</body>
</html>
