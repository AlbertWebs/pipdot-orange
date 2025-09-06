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
    @include('google')
</head>

<body>
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
                            <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> XAUUSD <span class="uk-text-success">1478.81</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> GBPUSD <span class="uk-text-danger">1.3191</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> EURUSD <span class="uk-text-danger">1.1159</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDJPY <span class="uk-text-success">109.59</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCAD <span class="uk-text-success">1.3172</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCHF <span class="uk-text-success">0.9776</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> AUDUSD <span class="uk-text-danger">0.67064</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> GBPJPY <span class="uk-text-success">141.91</span>
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
                                        <li><a href="about.html">Course One</a></li>
                                        <li><a href="blog-list.html">Course Two</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="{{url('/')}}/articles">Our Blog<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                <li><a href="{{url('/')}}/student/forums">Forums</a></li>
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
                            <div>
                                <a href="{{url('/')}}/student/home" class="uk-button uk-button-text">Student Portal</a>
                                {{-- <a href="#" class="uk-button uk-button-text">Sign up</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    @yield('content')
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex" data-uk-grid>
                    <div>
                        <h4 class="uk-heading-bullet">Articles</h4>
                        <ul class="uk-list uk-link-text">
                            <?php $Category = DB::table('categories')->limit(3)->get(); ?>
                            @foreach($Category as $Cat)
                            <li><a href="{{url('/')}}/articles/categogy/{{$Cat->slung}}">{{$Cat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Company</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="{{url('/')}}/about-us">About Us</a></li>
                            <li><a href="{{url('/')}}/forex-courses">Forex Courses</a></li>
                            <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Legal</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="{{url('/')}}/terms-and-conditions">Terms &amp; Conditions</a></li>
                            <li><a href="{{url('/')}}/privacy-policy">Privacy &amp; Policy</a></li>
                            <li><a href="{{url('/')}}/copyright">Copyright</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <h4 class="uk-heading-bullet">Support</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="{{url('/')}}/how-it-works">How it Works</a></li>
                            <li><a href="{{url('/')}}/frequently-asked-questions">FAQ</a></li>
                            <li><a href="{{url('/')}}/forex-courses/student/forums">Forums</a></li>
                        </ul>
                    </div>
                    <div class="uk-flex-first uk-flex-last@m">
                        <h4 class="uk-heading-bullet">Contact Us</h4>
                        <ul class="uk-list uk-link-text">
                            <li><img class="uk-margin-small-bottom" src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}" data-src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}" alt="logo" width="230" height="36" data-uk-img></li>
                            <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>{{$Settings->email}}</a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>{{$Settings->location}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                    <div class="uk-width-5-6@m uk-margin-bottom">
                        <div class="in-footer-warning in-margin-top-20@s">
                            <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                            <p class="uk-text-small">{!! html_entity_decode($Settings->risks, ENT_QUOTES, 'UTF-8') !!} </p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m in-copyright-text">
                        <p>Copyright © <a href="{{url('/copyright')}}">{{$Settings->sitename}}</a> <?php echo date('Y') ?> All rights reserved.</p>
                    </div>
                    <div class="uk-width-1-2@m uk-text-right@m in-footer-socials">
                        <a href="{{$Settings->linkedin}}"><i class="fab fa-linkedin"></i></a>
                        <a href="{{$Settings->youtube}}"><i class="fab fa-youtube"></i></a>
                        <a href="{{$Settings->facebook}}"><i class="fab fa-facebook-square"></i></a>
                        <a href="{{$Settings->instagram}}"><i class="fab fa-instagram"></i></a>
                        <a href="{{$Settings->twitter}}"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- module totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- module totop begin -->
    </footer>
    <!-- Javascript -->
    <script src="{{asset('MyAssets/theme/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('MyAssets/theme/js/vendors/indonez.min.js')}}"></script>
</body>

@endforeach
</html>