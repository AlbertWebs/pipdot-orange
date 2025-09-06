@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
</header>

<main>
 
 <!-- section content begin -->
 <div class="uk-section uk-section-muted uk-padding-large in-padding-large-vertical@s in-profit-15">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
                <p class="uk-text-lead uk-margin-remove-bottom uk-text-center in-offset-top-10">Learn How to trade with {{$Settings->sitename}}</p>
                <h2 class="uk-margin-small-top uk-text-center">How is works</h2>
                <div class="uk-grid-large uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <?php $Count = 1?>
                    @foreach ($How as $how)
                    <div>
                        <span class="in-icon-wrap circle large">{{$Count}}</span>
                        <h4 class="uk-margin-top">{{$how->title}}</h4>
                        <p>{!! html_entity_decode($how->content, ENT_QUOTES, 'UTF-8') !!} </p>
                    </div>
                    <?php $Count = $Count+1 ?>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
@include('front.courses')

</main>

@endforeach
@endsection