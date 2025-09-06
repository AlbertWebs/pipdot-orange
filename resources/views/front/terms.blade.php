@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
</header>
  <!-- breadcrumb content begin -->
  <div class="uk-section uk-padding-remove-vertical">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-breadcrumb">
                <ul class="uk-breadcrumb uk-float-right">
                    <li><a href="index.html">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<main>
   
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-3@m">
                    <div class="uk-card uk-card-large uk-card-default in-card-paper">
                        <div class="uk-card-body">
                            <h2>Terms and Conditions</h2>
                            <p>It is highly reccomended that you read these Terms and Conditions carefully before using the www.pipdotfx.com website operated by Pipdot FX Consultants .</p>
                            <p> Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service. </p> 
                            <p> By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement for Pipdot FX Consultants has been created by pipdotfx.com.</p>
                            
                            <hr class="uk-margin-medium-top uk-margin-small-bottom">

                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <?php $Count = 1; ?>
                                @foreach ($Terms as $Terms)
                                @if($Count == 1)
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">{{$Terms->title}}</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>{!! html_entity_decode($Terms->content, ENT_QUOTES, 'UTF-8') !!}</li>
                                        </ul>
                                    </div>
                                </li>
                                @else
                                <li>
                                    <a class="uk-accordion-title" href="#">{{$Terms->title}}</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>{!! html_entity_decode($Terms->content, ENT_QUOTES, 'UTF-8') !!}</li>
                                        </ul>
                                    </div>
                                </li>
                                @endif
                                <?php $Count = $Count+1 ?>
                                @endforeach
                            </ul>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                                <p class="uk-text-small">For general inquiries please contact <a class="uk-text-lowercase uk-link" href="mailto:">{{$Settings->email}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


</main>
@endforeach
@endsection