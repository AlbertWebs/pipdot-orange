@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($Blogs as $item)
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <video oncontextmenu="return false;" width="100%" height="320" controls controlsList="nodownload"> 
                    <source src="{{url('/')}}/uploads/blogs/{{$item->video}}" type="video/mp4"> 
                </video>
                <div class="uk-width-1-1 in-figure-available">
                    {{-- <img class="uk-width-1-1 uk-border-rounded" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="sample-image" data-uk-img> --}}
                    {{--  --}}
                  
                    {{--  --}}
                </div>
                <div class="uk-width-3-4@m">
                    <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-body">
                            <div class="uk-flex uk-flex-middle uk-margin-remove-bottom">
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
                                    @endforeach
                                </div>
                            </div>
                          
                            <h2 class="uk-margin-top uk-margin-medium-bottom">{{$item->title}}</h2>
                            {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                        </div>
                        <div class="uk-card-footer uk-clearfix">
                            <?php $Category = DB::table('categories')->where('id',$item->category)->get() ?>
                            @foreach ($Category as $Category)
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href="{{url('/')}}/articles/category/{{$Category->slung}}" class="uk-link-muted">{{$Category->title}}</a>, &nbsp;<a href="{{url('/')}}" class="uk-link-muted">Pipdot FX Consultants</a>, &nbsp;<a href="{{url('/')}}/articles" class="uk-link-muted">News</a>
                            </div>
                            @endforeach
                            
                            <div class="uk-float-right in-article-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/articles/{{$item->slung}}" data-uk-tooltip="Share with Facebook" class="uk-label uk-border-pill in-brand-facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                                <a href="https://twitter.com/share?text={{$item->title}}&url={{url('/')}}/articles/{{$item->slung}}&hashtags={{$Settings->sitename}},{{$Category->title}}" data-uk-tooltip="Share with Twitter" class="uk-label uk-border-pill in-brand-twitter"><i class="fab fa-twitter fa-sm"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    @if(Auth::user())
    <!-- section content begin -->
    <div class="uk-section uk-section-small in-offset-top-20">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <h2 class="uk-margin-small-bottom">Comments(<?php echo count( $Comments = DB::table('comments')->where('post_id',$item->id)->where('parent_id', '=', 0)->get()) ?>)</h2>
                    <ul class="uk-comment-list">
                        @foreach ($Comments as $items)
                        <li>
                            <article class="uk-comment uk-visible-toggle">
                                <div class="uk-grid uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <div class="uk-comment-header">
                                            <img class="uk-border-circle uk-background-muted uk-comment-avatar" src="{{asset('theme/img/avatar.png')}}" width="70" height="70" alt="avatar">
                                        </div>
                                    </div>
                                    <?php $User = DB::table('users')->where('id',$items->user_id)->get() ?>
                                    @foreach ($User as $User)
                                    <div class="uk-width-expand">
                                        <div class="uk-comment-body uk-position-relative">
                                            <div class="uk-position-top-right uk-hidden-hover"><a id="reply-btn-{{$items->id}}" href="#"><i class="fas fa-reply fa-xs uk-margin-small-right"></i>Reply</a></div>
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{$User->name}}</a></h4>
                                                                  
                                            <?php 
                                                $RawDate = $items->created_at;
                                                $FormatDate = strtotime($RawDate);
                                                $Month = date('M',$FormatDate);
                                                $Date = date('D',$FormatDate);
                                                $date = date('d',$FormatDate);
                                                $Year = date('Y',$FormatDate);
                                            ?>
                                        
                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset uk-text-small" href="#"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>{{$Month}} {{$date}}, {{$Year}}</a></p>
                                            <p>{!! html_entity_decode($items->comment, ENT_QUOTES, 'UTF-8') !!}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </article>
                            {{-- Leave Reply --}}
                            <form action="{{ route('reply.add') }}" method="POST" class="uk-form uk-grid-small reply-form" id="reply-form-{{$items->id}}" data-uk-grid>
                                {{csrf_field()}}
                                <input type="hidden" name="post_id" value="{{ $item->id }}" />
                                {{-- <input type="hidden" name="blog_id" value="{{ $item->id }}" /> --}}
                                <input type="hidden" name="comment_id" value="{{ $items->id }}" />
                                <div class="uk-width-1-1">
                                    <textarea required class="uk-textarea uk-border-rounded" id="message" name="comment" rows="6" placeholder="Comment"></textarea>
                                </div>
                                <div class="uk-width-1-1">
                                    <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Post Reply</button>
                                </div>
                            </form>
                            {{-- Leave Reply --}}
                            <?php $Replies = DB::table('comments')->where('parent_id',$items->id)->get(); ?>
                            @if($Replies->isEmpty())

                            @else
                                <ul>
                                    @foreach ($Replies as $Re)
                                    <?php $User = DB::table('users')->where('id',$Re->user_id)->get() ?>
                                    @foreach ($User as $User)
                                    <li>
                                        <article class="uk-comment uk-comment-primary uk-visible-toggle">
                                            <div class="uk-grid uk-grid-medium">
                                                <div class="uk-width-auto">
                                                    <div class="uk-comment-header">
                                                        <img class="uk-border-circle uk-background-muted uk-comment-avatar" src="{{asset('theme/img/avatar.png')}}" width="70" height="70" alt="avatar">
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-comment-body uk-position-relative">
                                                        {{-- <div class="uk-position-top-right uk-hidden-hover"><a href="#"><i class="fas fa-reply fa-xs uk-margin-small-right"></i>Reply</a></div> --}}
                                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">{{$User->name}}</a></h4>
                                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset uk-text-small" href="#"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>April 27, 2020</a></p>
                                                        <p>{!! html_entity_decode($Re->comment, ENT_QUOTES, 'UTF-8') !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    @endforeach
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-offset-top-20">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <h2 class="uk-margin-bottom">Leave a comment</h2>
                    <form action="{{ route('comment.add') }}" method="POST" class="uk-form uk-grid-small" data-uk-grid>
                        {{csrf_field()}}
                        <input type="hidden" name="post_id" value="{{ $item->id }}" />
                        <div class="uk-width-1-2@s">
                            <input  class="uk-input uk-border-rounded" value="{{Auth::user()->name }}" id="name" name="name" type="text" placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input readonly class="uk-input uk-border-rounded" value="{{Auth::user()->email }}" id="email" name="email" type="email" placeholder="Email address">
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="comment" rows="6" placeholder="Comment"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Post comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    @else

    @endif
</main>
@endforeach
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.reply-form').hide();
    });
</script>

<?php $Comments = DB::table('comments')->where('post_id',$item->id)->where('parent_id', '=', 0)->get() ?>
@foreach ($Comments as $Comments)
<script>
    $(document).ready(function() {
        $('#reply-btn-{{$Comments->id}}').click(function(event) {
            event.preventDefault();
            $('#reply-form-{{$Comments->id}}').fadeToggle("slow");
        });
    });
</script>
@endforeach
@endsection

