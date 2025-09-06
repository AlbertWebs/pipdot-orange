@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-grid-medium uk-child-width-1-2@m in-blog-1" data-uk-grid>
                        <?php $Count = 1 ?>
                        @foreach ($Blogs as $item)
                        @if($Count == 1)
                        <div class="uk-width-1-1">
                            <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                                <div class="uk-card-media-top">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="sample-image" data-uk-img>
                                </div>
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="{{url('/')}}/articles/{{$item->slung}}">{{$item->title}}</a>
                                    </h3>
                                    <p>{{$item->meta}}
                                    </p>
                                    <div class="uk-flex uk-flex-middle">
                                        <?php $Author = DB::table('users')->where('name',$item->author)->get(); ?>
                                        @foreach($Author as $author)
                                        <div class="uk-margin-small-right">
                                            <img class="uk-border-pill uk-background-muted" src="{{url('/')}}/uploads/users/{{$author->image}}" alt="{{$author->name}}" width="24" height="24">
                                        </div>
                                        
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                <a href="#">{{$author->name}}</a>
                                                <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                
                                                <?php 
                                                    $RawDate = $item->created_at;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                ?>
                                                {{$Month}} {{$date}}, {{$Year}}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="uk-card-footer uk-clearfix">
                                    <?php $Cat = DB::table('categories')->where('id',$item->category)->get(); ?>
                                    @foreach ($Cat as $cat)
                                    <div class="uk-float-left">
                                        <a href="#"><span class="uk-label uk-label-success uk-border-pill">{{$cat->title}}</span></a>
                                    </div>
                                    <div class="uk-float-right">
                                        <a href="{{url('/')}}/articles/{{$item->slung}}" class="uk-button uk-button-text">Read more</a>
                                    </div>
                                    @endforeach
                                </div>
                            </article>
                        </div>
                        @else
                        <div>
                            <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                                <div class="uk-card-media-top">
                                    <img src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="sample-image" data-uk-img>
                                </div>
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="{{url('/')}}/articles/{{$item->slung}}">{{$item->title}}</a>
                                    </h3>
                                    <p>{{$item->meta}}
                                    </p>
                                    <div class="uk-flex uk-flex-middle">
                                        <?php $Author = DB::table('users')->where('name',$item->author)->get(); ?>
                                        @foreach($Author as $author)
                                        <div class="uk-margin-small-right">
                                            <img class="uk-border-pill uk-background-muted" src="{{url('/')}}/uploads/users/{{$author->image}}" alt="{{$author->name}}" width="24" height="24">
                                        </div>
                                        
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                <a href="#">{{$author->name}}</a>
                                                <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                
                                                <?php 
                                                    $RawDate = $item->created_at;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                ?>
                                                {{$Month}} {{$date}}, {{$Year}}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="uk-card-footer uk-clearfix">
                                    <?php $Cat = DB::table('categories')->where('id',$item->category)->get(); ?>
                                    @foreach ($Cat as $cat)
                                    <div class="uk-float-left">
                                        <a href="#"><span class="uk-label uk-label-success uk-border-pill">{{$cat->title}}</span></a>
                                    </div>
                                    <div class="uk-float-right">
                                        <a href="{{url('/')}}/articles/{{$item->slung}}" class="uk-button uk-button-text">Read more</a>
                                    </div>
                                    @endforeach
                                </div>
                            </article>
                        </div>
                        @endif
                        <?php $Count = $Count+1 ?>
                        @endforeach
                    </div>
                    <!-- module pagination begin -->
                    
                    {{ $Blogs->links('vendor.pagination.default') }}
                    <!-- module pagination end -->
                </div>
                @include('blog.sidebar')
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endforeach
@endsection