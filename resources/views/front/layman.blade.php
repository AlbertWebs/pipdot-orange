<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10 uk-grid uk-grid-stack" data-uk-grid="">
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-3-5@m uk-text-center">
                    <h1 class="uk-margin-remove"> <span class="in-highlight">FINALLY...</span> FOREX TRADING SPOKEN IN LAYMAN'S TERMS!</h1>
                    <p class="uk-text-lead uk-margin-remove">PIPDOT FX STRATEGIES</p>
                    {{-- <p>Some believe you must choose between an online broker and a wealth management firm. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p> --}}
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                    {{-- <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                        <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i> <a class="layman" href="#">Simple Strategy..</a>
                    </h5>
                    
                
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                    {{-- <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                         <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i> <a class="layman" href="#">Expand in layman's Terms...</a>
                    </h5>
                    
                    
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                    {{-- <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                        <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i><a class="layman" href="#"> Build Confidence...</a>
                    </h5>
                    
                
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">
                    {{-- <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                        <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap circle uk-margin-bottom"></i>  <a class="layman" href="#">Forces you to believe your eyes..</a>
                    </h5>
                    
                    
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                    {{-- <i class="fas fa-funnel-dollar fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                        <i class="fas fa-funnel-dollar fa-lg in-icon-wrap circle uk-margin-bottom"></i> <a class="layman" href="#">Build Discipline..</a>
                    </h5>
                    
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                    {{-- <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i> --}}
                    <h5 class="uk-margin-top">
                        <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i> <a class="layman" href="#">Helps you become an independent Trader</a>
                    </h5>
                    
                </div>
            </div>
            {{--  --}}
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-margin-medium-bottom uk-text-center">
                    <p class="uk-text-lead">That is what PIPDOT FX Does!</p>
                    <p>
                        <a href="{{$Settings->twitter}}"><i class="fab fa-twitter"></i><span class="uk-text-lowercase">&nbsp; @pipdotfx</span></a>
                        &nbsp; &nbsp;<a href="{{$Settings->facebook}}"><i class="fab fa-facebook"></i><span class="uk-text-lowercase">&nbsp; @pipdotfx</span></a>
                        &nbsp; &nbsp;<a href="{{$Settings->instagram}}"><i class="fab fa-instagram"></i><span class="uk-text-lowercase">&nbsp; @pipdotfx</span></a>
                        &nbsp; &nbsp;<a href="{{$Settings->telegram}}"><i class="fab fa-telegram"></i><span class="uk-text-lowercase">&nbsp; @pipdotfx</span></a>
                        &nbsp; &nbsp;<a href="{{$Settings->youtube}}"><i class="fab fa-youtube"></i><span class="uk-text-lowercase">&nbsp; @pipdotfx</span></a>
                    </p>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
</div>
@endforeach


<div class="uk-section uk-section-secondary uk-padding-large in-padding-large-vertical@s uk-background-contain uk-background-bottom-center in-profit-11" data-src="img/in-section-profit-11.png" data-uk-img="">
    <div class="uk-container">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid="">
                        <div class="uk-width-1-2@m uk-first-column">
                            <h1 class="uk-margin-medium-bottom">PROVEN STRATEGIES YOU CAN TRUST</h1>
                            <a href="{{url('/')}}/forex-courses/login" class="uk-button uk-button-primary uk-border-rounded">Enroll Now<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span><i class="fas fa-trophy fa-lg"></i></span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h3>90-95% SUCCESS RATE</h3>
                                    <p>PIPDOT FX Strategies are back tested to track their success</p>
                                </div>
                            </div>
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span><i class="fas fa-check fa-lg"></i></span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h3>PROVEN TRACK RECORD</h3>
                                    <p>Weekly trade alerts followed by many worldwide.</p>
                                </div>
                            </div>
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span ><i class="fas fa-chart-bar fa-lg"></i></span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h3>LIVE ACCOUNTS</h3>
                                    <p>Complete transparency in our training sessions and Videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-text-center">
                <div class="uk-width-3-4@m">
                    <p class="uk-text-lead" style="color:#eb2026">You <strong>DO NOT</strong> need to use 1000 indicators, EA's or BOTs to Trade<br>GET READY TO KNOW "HOW TO FISH"</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>