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
                        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid>
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
                    <h2 style="color:#002e44">WELCOME TO PIPDOT FX.</h2>
                    {{-- <p>  </p> --}}
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-1@s uk-child-width-1-1@m" data-uk-grid>
                        <p class="uk-text-lead">
                            Learn to trade the global forex market which covers a broad categories of asset classes  from Currencies, Indices, Futures, Commodities, Stocks and Crypto.<br>
 Trade financial instruments as a professional!
                       </p>

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
                    <h2>Why PIPDOT FX?</h2>
                    <p class="uk-text-lead">
                        THE FOREX TRAINING YOU'VE BEEN LOOKING FOR!<br><br>
                         (Simple Strategy For Unbelievable Results)
                    </p>
                    <p class="uk-text-lead">
                        THE PROBLEM WITH FOREX TRAINING PROGRAMS<br><br>

                        Many Pipdot FX students find us after being burnt by expensive Forex "Training Programs" that turn out to be:<br>
                    </p>
                    <i class="fas fa-chevron-down uk-text-primary"></i>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                        <?php $Banners = DB::table('banners')->where('name','home_page_one')->get(); ?>
                        <div>
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    @foreach ($Banners as $Banners)
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center banner-images-heights" src="{{asset('theme/img/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body uk-text-center">
                                        <h4>GET RICH SCHEMES WITH ALL THE FALSE PROMISES.</h4>
                                        <br>

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
                                        <img class="uk-width-1-1 uk-align-center banner-images-heights" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body uk-text-center">

                                            <h4>MULTI-LEVEL MARKETING PLATFORMS "Pressure to recruit friends".</h4>


                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <?php $Banners = DB::table('banners')->where('name','home_pages_two')->get(); ?>
                            <div class="in-pricing-1">
                                @foreach ($Banners as $Banners)
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    <div class="uk-card-media-top">
                                        <img class="uk-width-1-1 uk-align-center banner-images-heights" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-width data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                    <div class="uk-card-body uk-text-center">

                                        <h4>FAILING SIGNAL SERVICE PROVIDERS THAT DON'T TEACH YOU HOW TO TRADE.</h4>

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

      <!-- section why choose us begin -->
      <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand@m in-margin-top-20@s">
                    <h2 style="color:#002e44">CHECK THIS OUT</h2>
                    <p class="uk-text-lead">See what our students are currently enjoying know what to expect before you spend your money</p>
                    <div class="uk-grid-large uk-flex-middle uk-grid" data-uk-grid="">
                        <div class="uk-width-auto@m uk-first-column">
                            <h4 class="uk-margin-remove-bottom uk-text-primary">Ready to learn?</h4>
                            <p class="uk-margin-remove-top">Get started with your student account today.</p>
                        </div>
                        <div class="uk-width-expand@m">
                            <form class="uk-grid-small uk-grid" data-uk-grid="">

                                <div class="uk-width-1-1 uk-width-auto@m">
                                    <a target="new" href="{{url('/')}}/forex-courses/login" class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Open Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--  --}}

                    {{--  --}}
                </div>
                <?php $Vids = DB::table('vids')->where('id','2')->get(); ?>
                @foreach ($Vids as $vids)
                <div class="uk-width-1-2@m">
                    <div class="uk-child-width-1-1@s uk-child-width-1-1@m" data-uk-grid>
                        <video width="320" height="240" controls>
                            <source src="{{url('/')}}/uploads/banners/{{$vids->video}}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                          Your browser does not support the video tag.
                          </video>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- section why choose us end -->

    <!-- section content end -->
    <?php $Banners = DB::table('banners')->where('name','home_page_three')->get(); ?>
    @foreach ($Banners as $Banners)
    <!-- section content begin -->
    <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="{{url('/')}}/uploads/banners/{{$Banners->image}}" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid-large" data-uk-grid>
                <div class="uk-width-1-1@m">
                    <h2>We are committed to meeting your FX trading needs</h2>
                    <p class="uk-text-lead"> Pipdot FX is always exploring the future. We learn, utilize and teach the best and simple trading strategies. <br> Our trading strategies gained from our educational material will provide you with comprehensive trading knowledge.</p>
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

    {{--  --}}
    <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
        <div class="uk-container">
            <div class="uk-grid-divider" data-uk-grid>
                <div class="uk-width-expand">
                    <h2 class="color:#002e44">You Deserve Better</h2>
                    <p class="uk-text-lead">If you believe you Deserve better, Pipdot FX is for you.<br> Join today and learn:</p>
                    <div class="uk-grid uk-child-width-1-1@s uk-child-width-1-1@m in-margin-bottom-30@s" data-uk-grid="">
                        <div class="uk-first-column">
                            <ul class="uk-list uk-list-bullet in-list-check uk-text-lead">
                                <li>How the forex market works.<br>Everything is built from  a solid  foundation.</li>
                                <li>When  and how  to enter, stay or exit  the market. <br> The essentials to surviving  in  the market.</li>
                                <li>Proven  trading  strategies  that are easy to understand. <br> Layman’s terms and logical explanations.</li>
                                <li>And more! <br> Reasons to keep students excited!</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m" style="margin:0 auto !important;">
                    <div class="uk-child-width-1-1@s uk-child-width-1-1@m text-center" data-uk-grid style="margin:0 auto !important;">
                        {{-- <video width="100%" controls>
                            <source src="{{url('/')}}/uploads/trading.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                          Your browser does not support the video tag.
                          </video> --}}
                          @include('front.chart-3')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    @include('front.testimonial')
    @include('front.layman')
    @include('front.benefits')
    @include('front.join')
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
                            <h2>Connect to global forex markets</h2>
                        </div>
                        <div class="uk-width-3-5@m">
                            <p class="uk-text-lead">Access 100+ trading instruments and simple trading strategies to help you grow your career as a trader</p>
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
