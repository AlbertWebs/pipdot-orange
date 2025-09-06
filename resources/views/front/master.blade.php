<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="author" content="Designekta Studios">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#002e44" />
    <meta name="google-site-verification" content="Wv89m6bhMCm5QNZUyCKio-xYMDiF7rpff0F_lpC1yWg" />
    <!-- Site Properties -->
    {{-- <title> {!! html_entity_decode($page_title, ENT_QUOTES, 'UTF-8') !!} - PipDot FX Consultants</title> --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('theme/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('theme/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('theme/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('theme/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('theme/fonts/lato-v16-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/lato-v16-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('theme/fonts/montserrat-v14-latin-600.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('theme/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    @include('favicon')
    @include('tawk')
    <style>
        .dont-show{
            /* display: none; */
            font-size:0px;
            padding: 0 !important;
            margin:0 !important;
        }
    </style>
    @include('google')
</head>

<body>
    {{-- <h1 class="dont-show">{{$page_title}}</h1> --}}
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>

        <!-- header content begin -->
        {{-- <div class="uk-section uk-padding-small in-profit-ticker">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                            <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-5@m uk-text-center custom-width" data-uk-grid>
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDJPY <span class="uk-text-success">{{$USDJPY ?? ''}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDEUR <span class="uk-text-success">{{$USDEUR ?? ''}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDGBP <span class="uk-text-success">{{$USDGBP ?? ''}}</span>
                                </li>

                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDCAD <span class="uk-text-success">{{$USDCAD ?? ''}}</span>
                                </li>

                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> EURUSD <span class="uk-text-success">{{$EURUSD ?? ''}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> EURGBP <span class="uk-text-success">{{$EURGBP ?? ''}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDAUD <span class="uk-text-success">{{$USDAUD ?? ''}}</span>
                                </li>
                               
                                <li>
                                    <i class="fas fa-exchange-alt in-icon-wrap small circle up"></i> USDBTC <span class="uk-text-success">{{$USDBTC ?? ''}}</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="uk-section uk-padding-remove-vertical">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-laogo" href="{{url('/')}}">
                                <img class="in-offset-top-10" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" data-src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="logo" width="230"  data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{url('/')}}">Home<i class="fas fa-home"></i></a>
                              
                            </li>
                            <li><a href="{{url('/')}}/about-us">About Us</a></li>
                            <li><a href="{{url('/')}}/forex-courses">Forex Course<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <?php $Courses = DB::table('courses')->get(); ?>
                                        @foreach ($Courses as $courses)
                                        <li><a href="{{url('/')}}/forex-courses/{{$courses->slung}}">{!! html_entity_decode($courses->title, ENT_QUOTES, 'UTF-8') !!}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="{{url('/')}}/articles">Our Blog<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                {{-- <li><a href="{{url('/')}}/student/forums">Forums</a></li> --}}
                                                <li><a href="{{url('/')}}/frequently-asked-questions">FAQ</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#">{{$Settings->tagline}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{url('/')}}/copy-trading">Copy Trading</a></li>
                            <li><a href="{{url('/')}}/contact-us">Contact US</a></li>
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            @if(Auth::user())
                            <div>
                                <a href="{{url('/')}}/apps/home" class="uk-button uk-button-text">Student Portal</a>
                                {{-- <a href="#" class="uk-button uk-button-text">Sign up</a> --}}
                            </div>
                            @else 
                            <div>
                                <a href="{{url('/')}}/forex-courses/login" class="uk-button uk-button-text">Student Portal</a>
                                {{-- <a href="#" class="uk-button uk-button-text">Sign up</a> --}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    @yield('content')
    @include('front.footer')
    <!-- Javascript -->
    <script rel="preload"  src="{{asset('theme/js/vendors/uikit.min.js')}}"></script>
    <script rel="preload" src="{{asset('theme/js/vendors/indonez.min.js')}}"></script>
    <script rel="preload"  src="{{asset('theme/js/tp.widget.bootstrap.min.js')}}" defer></script>
    <script rel="preload"  src="{{asset('theme/js/config-theme.js')}}"></script>
    @include('front.ajax')
</body>

@endforeach
</html>