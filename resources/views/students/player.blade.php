@extends('students.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
@foreach ($Topics as $topics)
<div id="content-wrapper">
    <div class="container-fluid pb-0">
        <div class="video-block-right-list section-padding">
           <div class="row mb-4">
              <div class="col-md-8">
                 <div class="single-video">
                  <video loop="true" oncontextmenu="return false;" width="100%" height="320" controls controlsList="nodownload"> 
                        <source src="{{url('/')}}/uploads/topics/{{$topics->video}}" type="video/mp4"> 
                  </video> 
                    {{-- <iframe class="myPlayer" width="100%" height="315" src="https://www.youtube-nocookie.com/embed/{{$topics->video}}?rel=0&controls=1&showinfo=1&modestbranding=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="video-slider-right-list">
                    <?php $OtherTopics = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->where('course_id',$topics->course_id)->get(); ?>
                    @foreach ($OtherTopics as $item)
                    <div class="video-card video-card-list @if($item->id == $topics->id) active @endif">
                        <div class="video-card-image">
                           <a class="play-icon" href="{{url('/')}}/apps/player/{{$item->video_encryption}}"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{url('/')}}/uploads/topics/{{$item->placeholder}}" alt=""></a>
                           <div class="time">{{$item->video_duration}}</div>
                        </div>
                        <div class="video-card-body">
                           <div class="btn-group float-right right-action">
                              <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                              </div>
                           </div>
                           <div class="video-title">
                              <a href="{{url('/')}}/apps/player/{{$item->video_encryption}}">{{$item->title}}</a>
                           </div>
                           <div class="video-page text-success">
                              Education <a title="" data-placement="top" data-toggle="tooltip" href="{{url('/')}}/apps/player/{{$item->video_encryption}}" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                            {{$item->video_views}} views &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($item->created_at) ?>
                           </div>
                        </div>
                     </div>
                    @endforeach
                </div>
              </div>
           </div>
        </div>
        <div class="video-block section-padding">
           <div class="row">
              <div class="col-md-8">
                 <div class="single-video-left">
                    <div class="single-video-title box mb-3">
                       <h2><a href="#">{{$topics->title}}</a></h2>
                       <p class="mb-0"><i class="fas fa-eye"></i> {{$topics->video_views}} views</p>
                    </div>
                    <div class="box mb-3 single-video-comment-tabs">
                       {{-- <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                             <a class="nav-link active" id="retro-comments-tab" data-toggle="tab" href="#retro-comments" role="tab" aria-controls="retro" aria-selected="false">Overview</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="disqus-comments-tab" data-toggle="tab" href="#disqus-comments" role="tab" aria-controls="disqus" aria-selected="true">Forum</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link" id="facebook-comments-tab" data-toggle="tab" href="#facebook-comments" role="tab" aria-controls="facebook" aria-selected="false">Notes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="announcement-tab" data-toggle="tab" href="#announcement" role="tab" aria-controls="announcement" aria-selected="false">Announcement</a>
                         </li>
                       </ul> --}}
                       <?php $Threads = DB::table('threads')->where('topic_id',$topics->id)->get(); ?>
                       <div class="tab-content">
                          <div class="tab-pane fade" id="disqus-comments" role="tabpanel" aria-labelledby="disqus-comments-tab">
                            <div class="reviews-members pt-0">
                                <div class="media">
                                   <a href="#"><img class="mr-3" src="{{url('/')}}/uploads/users/{{Auth::user()->image}}" alt="{{Auth::user()->name}}"></a>
                                 
                                   <div class="media-body">
                                      <div class="form-members-body">
                                         <form id="post-comment">
                                         @csrf
                                         <textarea rows="2" name="comment" placeholder="Add a public comment..." class="form-control"></textarea>
                                         <input name="topic_id" value="{{$topics->id}}" type="hidden">
                                      </div>
                                      <div class="form-members-footer text-right mt-2">
                                         <b class="float-left"><?php echo count($Threads) ?> Comments
                                         </b>
                                         <button class="btn btn-outline-danger btn-sm" type="button">CANCEL</button> 
                                         <button class="btn btn-danger btn-sm" type="submit">COMMENT</button>
                                       </form>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <center><img class="spinner" width="32" src="{{asset('theme/img/ZZ5H.gif')}}" alt=""></center>
                             @foreach($Threads as $thread)
                             {{-- <div class="reviews-members">
                                <div class="media">
                                   <?php $User = App\Models\User::find($thread->user_id) ?>
                                   <a href="#"><img class="mr-3" src="{{url('/')}}/uploads/users/{{$User->image}}" alt="{{$User->name}}"></a>
                                   <div class="media-body">
                                      <div class="reviews-members-header">
                                         <h6 class="mb-1"><a class="text-black" href="#">{{$User->name}} </a> <small class="text-gray"><?php echo timeAgo($thread->created_at) ?></small></h6>
                                      </div>
                                      <div class="reviews-members-body">
                                         <p> {!! html_entity_decode($thread->content, ENT_QUOTES, 'UTF-8') !!}</p>
                                      </div>
                                      <?php 
                                          $Likes = DB::table('reactions')->where('threat_id',$thread->id)->where('type','1')->get();
                                          $Dislikes = DB::table('reactions')->where('threat_id',$thread->id)->where('type','0')->get();
                                      ?>
                                      <div class="reviews-members-footer">
                                         <span><a class="total-like Thelike" href="{{url('/')}}/apps/add-reaction/{{$thread->id}}/1"><i class="fas fa-thumbs-up"></i> <?php echo count($Likes) ?></a> <a class="total-like Thelike" href="{{url('/')}}/apps/add-reaction/{{$thread->id}}/0"><i class="fas fa-thumbs-down"></i> <?php echo count($Dislikes) ?></a></span>
                                         <span dir="rtl" class="total-like-user-main ml-2">
                                         {{-- Reactors --}}
                                         <?php $ReactionAll = App\Models\Reaction::where('threat_id',$thread->id)->get(); ?>
                                         @foreach ($ReactionAll as $all)
                                         <?php $UserAll = App\Models\User::find($all->user_id) ?>
                                         <a href="#" title="{{$UserAll->name}}" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="{{url('/')}}/uploads/users/{{$UserAll->image}}" alt="Generic placeholder image"></a>
                                         @endforeach
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div> --}}
                             @endforeach
                          </div>
                          {{-- <div class="tab-pane fade" id="facebook-comments" role="tabpanel" aria-labelledby="facebook-comments-tab">
                             <h1>Soon...</h1>
                          </div>
                          <div class="tab-pane fade" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
                            <h1>announcement...</h1>
                         </div> --}}
                          
                          <div class="tab-pane fade show active" id="retro-comments" role="tabpanel" aria-labelledby="retro-comments-tab">
                            <div class="single-video-info-content box mb-3">
                                <h6>Meta :</h6>
                                <p>{{$topics->meta}}</p>
                                <h6>Overview :</h6>
                                <p>{!! html_entity_decode($topics->content, ENT_QUOTES, 'UTF-8') !!} </p>
                               <h6>Article Tags :</h6>
                               <p class="tags mb-0">
                                  <?php $Category = DB::table('categories')->limit(6)->inRandomOrder()->get(); ?>
                                  @foreach ($Category as $Category)
                                  <span><a target="blank" href="{{url('/')}}/articles/category/{{$Category->slung}}">{{$Category->title}}(<?php echo count($Blogs = DB::table('blogs')->where('category',$Category->id)->get()) ?>)</a></span> 
                                  @endforeach
                               </p>
                            </div>
                          
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="single-video-right">
                    <div class="row">
                       <div class="col-md-12">
                          <div class="adblock">
                             <div class="img">
                                <br>
                             </div>
                          </div>
                          <div class="main-title">
                             <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                             </div>
                             <h6>Random Videos</h6>
                          </div>
                       </div>
                       <div class="col-md-12">
                          <?php $RandomVideos = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->limit(10)->InRandomOrder()->get(); ?>
                          @foreach($RandomVideos as $RandVids)
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="{{url('/')}}/apps/player/{{$RandVids->video_encryption}}"><img class="img-fluid" src="{{url('/')}}/uploads/topics/{{$RandVids->placeholder}}" alt=""></a>
                                <div class="time">{{$RandVids->video_duration}}</div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="{{url('/')}}/apps/player/{{$RandVids->video_encryption}}">{{$RandVids->title}}</a>
                                </div>
                                <div class="video-page text-success">
                                   {{$Settings->sitename}} <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   {{$RandVids->video_views}} views &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($RandVids->created_at) ?>
                                </div>
                             </div>
                          </div>
                         @endforeach
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    @include('students.footer')

 </div>
 @endforeach
 @endforeach

@endsection
