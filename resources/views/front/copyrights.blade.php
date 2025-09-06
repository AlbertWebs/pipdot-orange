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
                            <h2>Copyright Statement</h2>
                            <p> This website and its content is copyright of Pipdot FX Consultants - © Pipdot FX Consultants 2021. All rights reserved. Any redistribution or reproduction of part or all of the contents in any form is partially prohibited other than the following:</p>
                            
                            <hr class="uk-margin-medium-top uk-margin-small-bottom">
                            @foreach ($Copyright as $item)
                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <li class="uk-open">
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            @endforeach

                          
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

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                    <h1>Legal Docs</h1>
                </div>
                <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <i class="fas fa-file fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Terms of Service</h3>
                        <p>Read the Terms of Service and License Agreement for Blockit as well as our BlockitApp &amp; Developer Agreements.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>License Agreement</a></li>
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Term of Services for Blockit Trade</a></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fas fa-globe fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Policies</h3>
                        <p>Find out more about what information we collect at Blockit, how we use it, and what control you have over your data.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Privacy Statement</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <i class="fas fa-shield-alt fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Security</h3>
                        <p>Learn more about how we keep your work and personal data safe when you’re using our services.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Blockit Trade Security</a></li>
                            <li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Responsible Disclosure Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endforeach
@endsection