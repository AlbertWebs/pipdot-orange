@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)

@foreach ($Course as $item)
@if($item->id == 1)
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-3-5@m">
                    <h1 class="uk-margin-small-bottom"><span class="in-highlight">{{$item->title}}</span></h1>
                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                    {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                    </ul>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Learn</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Understand</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Trade</span>
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-expand@m">
                                <h3 class="uk-margin-remove-bottom">Pipdot FX Trade Academy</h3>
                                <p class="uk-margin-small-top">{!! html_entity_decode($item->meta, ENT_QUOTES, 'UTF-8') !!}</p>
                                @if(Auth::user())
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('/')}}/secured-payments/{{$item->id}}">Start Learning</a>
                                @else
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('/')}}/forex-courses/login">Start Learning</a>
                                @endif
                            </div>
                            <div class="uk-width-auto@m uk-visible@m">
                                <div class="in-icon-wrapper transparent uk-margin-top">
                                    <i class="fas fa-user-graduate fa-5x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <hr>
  
</main>
@else 
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
               
                <div class="uk-width-2-5@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-expand@m">
                                <h3 class="uk-margin-remove-bottom">Pipdot FX Trade Academy</h3>
                                <p class="uk-margin-small-top">{!! html_entity_decode($item->meta, ENT_QUOTES, 'UTF-8') !!}</p>
                                @if(Auth::user())
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('/')}}/secured-payments/{{$item->id}}">Start Learning</a>
                                @else
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('/')}}/forex-courses/login">Start Learning</a>
                                @endif
                           </div>
                            <div class="uk-width-auto@m uk-visible@m">
                                <div class="in-icon-wrapper transparent uk-margin-top">
                                    <i class="fas fa-user-graduate fa-5x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-width-3-5@m">
                    <h1 class="uk-margin-small-bottom"><span class="in-highlight">{{$item->title}}</span></h1>
                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                    {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                    </ul>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Learn</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Understand</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Trade</span>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <hr>
  
</main>
@endif
@endforeach
  <!-- section content begin -->
  <div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
               
                <div class="uk-flex uk-flex-center uk-margin-medium-top uk-margin-bottom">
                    <div class="uk-width-3-4@m">
                        <div class="uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                          
                            <div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Video Tutorials</a>
                            </div>
                            <div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Unlimited Consultations</a>
                            </div>
                            <div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Daily Signals</a>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection