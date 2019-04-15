<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    


    @include('externalAsset.links')
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
