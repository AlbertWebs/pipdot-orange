<?php 
// phpinfo(); die();
 ?>
@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
{{-- <main> --}}
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
            <ul class="uk-slideshow-items">
                @foreach ($Sliders as $item)
                <li>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-overlay">
                                    <h1>{!! html_entity_decode($item->name, ENT_QUOTES, 'UTF-8') !!}</h1>
                                    <p class="uk-text-lead uk-visible@m">{!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}</p>
                                    <div class="in-slideshow-button">
                                        <a target="blank" href="{{url('/')}}/forex-courses" class="uk-button uk-button-primary uk-border-rounded">Our Courses</a>
                                        <a target="blank" href="{{url('/')}}/articles" class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">Read Articles</a>
                                    </div>
                                    <p class="uk-text-small"><span class="uk-text-primary">*</span>Trading in Forex/ CFDs is highly speculative and carries a high level of risk.</p>
                                </div>
                            </div>
                            <div class="uk-position-center">
                                <img class="uk-animation-slide-top-small" src="{{url('/')}}/uploads/slider/{{$item->image}}" data-src="{{url('/')}}/uploads/slider/{{$item->image}}" alt="slideshow-image" width="862" height="540" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li> 
                @endforeach
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
            <div class="uk-container in-slideshow-feature uk-visible@m">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        <div class="uk-child-width-1-3" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-check in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">Perfect Entry Strategies</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-check in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">Stay-Trail Your Trades Strategies</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-check in-icon-wrap small circle uk-box-shadow-small"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold uk-margin-remove">Low Risk Scalping Strategies</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slideshow content end -->


    <!-- section why choose us begin -->
    <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand@m in-margin-top-20@s">
                    <h2>Why {{$Settings->sitename}} is a trusted FX Consultants</h2>
                    {{-- <p>  </p> --}}
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-icon-1.svg')}}" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold">Wide Range of Trading Instruments</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-icon-2.svg')}}" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold">Unparalleled Trading Conditions</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-icon-3.svg')}}" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold">Globally Licensed &amp; Regulated</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-icon-4.svg')}}" alt="profit-icon" width="72" height="72" data-uk-img>
                            </div>
                            <div>
                                <p class="uk-text-bold">Committed to Forex Education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section why choose us end -->

    
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-2" data-src="{{asset('theme/img/in-profit-decor-3.svg')}}" data-uk-img>
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-2@m uk-text-center">
                    <h2>WELCOME TO PIPDOT FX.</h2>
                    <p class="uk-text-lead">
                         Learn to trade the global forex market
                        Currencies, Indices, Futures, Commodities, Stocks, Crypto
                        Trade financial instruments as a professional
                    </p>
                    <i class="fas fa-chevron-down uk-text-primary"></i>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                        <?php $Banners = DB::table('banners')->where('name','home_page_one')->get(); ?>
                        <div>
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    @foreach ($Banners as $Banners)
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="{{asset('theme/img/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-1">
                                            <h2 class="uk-margin-remove-bottom">Markets</h2>
                                            <p class="uk-text-lead">Analysis</p>
                                        </div>
                                        <p class="uk-margin-small-top">Stay ahead of the markets with world-leading market analysis through daily articles by industry experts.</p>
                                        <div class="uk-margin-medium-top">
                                            <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="{{url('/')}}/articles">Read Articles<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                            <span class="uk-label uk-border-pill uk-align-right">Weekly Update</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div>
                            <?php $Banners = DB::table('banners')->where('name','home_page_two')->get(); ?>
                            <div class="in-pricing-1">
                                @foreach ($Banners as $Banners)
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="in-heading-extra in-card-decor-2">
                                            <h2 class="uk-margin-remove-bottom">Technical</h2>
                                            <p class="uk-text-lead">Analysis</p>
                                        </div>
                                        <p class="uk-margin-small-top">Access the financial markets with an account catered to your needs and benefit from good conditions.</p>
                                        <div class="uk-margin-medium-top">
                                            <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="{{url('/')}}/articles">Read Articles<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                            <span class="uk-label uk-border-pill uk-align-right">Daily Update</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>                    
                        <div class="uk-width-1-1">
                            <div class="uk-grid uk-grid-divider uk-grid-match in-profit-tradestatus" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <div class="uk-flex uk-flex-left uk-flex-center@m">
                                        <div class="uk-grid uk-grid-small uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <i class="fas fa-phone fa-2x in-icon-wrap circle primary-color"></i>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h1 class="uk-margin-remove-bottom">{{$Settings->mobile_one}}</h1>
                                                <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">Contact The Experts</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-width-expand@m uk-flex-middle">
                                    <p class="uk-text-lead">To Learn to Trade & Invest in Stocks, Currencies, Indices, and Commodities (CFDs).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- section content end -->
    <?php $Banners = DB::table('banners')->where('name','home_page_three')->get(); ?>
    @foreach ($Banners as $Banners)
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-1-1@m">
                    <h2>We are committed to meeting your CFD and FX trading needs</h2>
                    <p class="uk-text-lead">PipdotFX consultants is always exploring the future. We learn, utilize and teach the best technologies currently on offer. Our set of tools and educational material provide you with actionable data and comprehensive trading Knowledge. This allows all clients to react in real-time to current market events.</p>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-small-top" data-uk-grid>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="45">0</span>+
                            </h1>
                            <h3>Tutorials</h3>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="24">0</span>Hours
                            </h1>
                            <h3>Support</h3>
                        </div>
                        <div>
                            <h1 class="uk-heading-bullet">
                                <span class="count" data-counter-end="10">0</span>+
                            </h1>
                            <h3>Support Staff</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    @endforeach
    
    @include('front.courses')
    @include('front.chart')
    @include('front.hows')
    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-4">
        <div class="uk-container uk-margin-small-top uk-margin-medium-bottom">
            <div class="uk-grid uk-flex uk-flex-center " data-uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-expand@m">
                            <h2>Connect to global capital markets</h2>
                        </div>
                        <div class="uk-width-3-5@m">
                            <p class="uk-text-lead">Access 100+ trading instruments and professional asset management on award-winning platforms.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="uk-width-1-1">
                    <div class="uk-child-width-1-2@s uk-child-width-1-5@m in-profit-stockprice" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-ticker-1.svg')}}" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>1,526.05
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-ticker-2.svg')}}" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>205.37
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-ticker-3.svg')}}" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right down">
                                    <i class="fas fa-arrow-down"></i>267.97
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-ticker-4.svg')}}" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>59,230
                                </span>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                <span class="uk-float-left">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-ticker-5.svg')}}" alt="profit-ticker" width="77" height="20" data-uk-img>
                                </span>
                                <span class="uk-float-right up">
                                    <i class="fas fa-arrow-up"></i>78.98
                                </span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="uk-width-5-6@m">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <h4 class="uk-margin-remove-bottom uk-text-primary">Ready to learn trading?</h4>
                            <p class="uk-margin-remove-top">Get started  today.</p>
                        </div>
                        <div class="uk-width-expand@m">
                            <form class="uk-grid-small" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Email address...">
                                </div>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number...">
                                </div>
                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Open Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
{{-- </main> --}}
@endforeach
@endsection