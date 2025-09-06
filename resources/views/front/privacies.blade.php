@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
</header>
  
<main>
    
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-3@m">
                    <div class="uk-card uk-card-large uk-card-default in-card-paper">
                        <div class="uk-card-body">
                            <h2>Privacy Policies</h2>
                            <p>Pipdot FX Consultants values privacy of any person or organization, business in nature or otherwise. </p>
                            <p> We are therefore committed to protecting any personal information collected through the pipdotfx.com website Pipdot FX Consultants may from time to time change this information and will inform all interested parties of the changes.</p>
                            
                            <hr class="uk-margin-medium-top uk-margin-small-bottom">

                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <?php $Count = 1; ?>
                                @foreach ($Privacy as $Privacy)
                                @if($Count == 1)
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#">{{$Privacy->title}}</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>{!! html_entity_decode($Privacy->content, ENT_QUOTES, 'UTF-8') !!}</li>
                                        </ul>
                                    </div>
                                </li>
                                @else
                                <li>
                                    <a class="uk-accordion-title" href="#">{{$Privacy->title}}</a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li>{!! html_entity_decode($Privacy->content, ENT_QUOTES, 'UTF-8') !!}</li>
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