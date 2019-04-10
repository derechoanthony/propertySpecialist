<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PropertySpecialist</title>
        <meta name="description" content="Cebu realestate properties">
        <meta name="keywords" content="realestate cebu, realestate property">
        <meta name="google-site-verification" content="lupDBzZK77FGX2j8yEuNJ1-N3OfZRje2515DMwoItec" />
        
        @include('externalAsset.defaultAssetStyleSheet')
    </head>
    <body>
        @include('fixLayout.fixHeader')
        @yield('content')
        @include('fixLayout.fixFooter')
        @include('externalAsset.defaultAssetScript')
    </body>
    </html>