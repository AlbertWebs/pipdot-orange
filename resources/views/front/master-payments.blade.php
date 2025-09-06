<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#e9e8f0" />
    <!-- Site Properties -->
    <title> {!! html_entity_decode($page_title, ENT_QUOTES, 'UTF-8') !!} - PipDot FX Consultants</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('MyAssets/theme/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('theme/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('theme/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('theme/fonts/fa-brands-400.woff2" as="font" type="font/woff2')}}" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/fa-solid-900.woff2" as="font" type="font/woff2')}}" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('theme/fonts/lato-v16-latin-700.woff2" as="font" type="font/woff2')}}" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/lato-v16-latin-regular.woff2" as="font" type="font/woff2')}}" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/montserrat-v14-latin-600.woff2" as="font" type="font/woff2')}}" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('theme/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    @include('favicon')
    @include('tawk')
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    
    @yield('content')
 
    <!-- Javascript -->
    <script src="{{asset('MyAssets/theme/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('MyAssets/theme/js/vendors/indonez.min.js')}}"></script>
    <script src="{{asset('MyAssets/theme/js/tp.widget.bootstrap.min.js')}}" defer></script>
    <script src="{{asset('MyAssets/theme/js/config-theme.js')}}"></script>
</body>

@endforeach
</html>