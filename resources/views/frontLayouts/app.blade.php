<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('externalAsset.links')
        @include('externalAsset.defaultAssetStyleSheet')
    </head>
    <body>
        @include('fixLayout.fixHeader')
        @yield('content')
        @include('fixLayout.fixFooter')
        @include('externalAsset.defaultAssetScript')
    </body>
    </html>