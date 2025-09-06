@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
</header>
@foreach ($FAQ as $faq)
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <?php $Banners = DB::table('banners')->where('name','faq_page')->get(); ?>
                @foreach ($Banners as $Banners)
                <div class="uk-width-1-1 in-figure-available">
                    <img class="uk-width-1-1 uk-border-rounded" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/faq/{{$faq->banner}}" alt="PipDot Frequently Asked Questions" data-uk-img>
                </div> 
                @endforeach
                
                <div class="uk-width-3-4@m">
                    <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-body">
                           
                            <h2 class="uk-margin-top uk-margin-medium-bottom">{{$faq->title}}</h2>
                            {!! html_entity_decode($faq->content, ENT_QUOTES, 'UTF-8') !!}
                            </div>
                        <div class="uk-card-footer uk-clearfix">
                            <?php $Category = DB::table('categories')->where('id',$faq->category)->get() ?>
                            @foreach ($Category as $Category)
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href="{{url('/')}}/articles/category/{{$Category->slung}}" class="uk-link-muted">{{$Category->title}}</a>, &nbsp;<a href="{{url('/')}}" class="uk-link-muted">Pipdot FX Consultants</a>, &nbsp;<a href="{{url('/')}}/articles" class="uk-link-muted">News</a>
                            </div>
                            @endforeach
                            
                            <div class="uk-float-right in-article-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/frequently-asked-questions/{{$faq->slung}}" data-uk-tooltip="Share with Facebook" class="uk-label uk-border-pill in-brand-facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                                <a href="https://twitter.com/share?text={{$faq->title}}&url={{url('/')}}/frequently-asked-questions/{{$faq->slung}}&hashtags={{$Settings->sitename}},{{$Category->title}}" data-uk-tooltip="Share with Twitter" class="uk-label uk-border-pill in-brand-twitter"><i class="fab fa-twitter fa-sm"></i></a>
                                {{-- <a href="#" data-uk-tooltip="Share with Instagram" class="uk-label uk-border-pill in-brand-pinterest"><i class="fab fa-instagram fa-sm"></i></a> --}}
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
  
</main>
@endforeach
@endforeach
@endsection