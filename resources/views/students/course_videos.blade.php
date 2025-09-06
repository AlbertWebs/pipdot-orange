@extends('students.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div id="content-wrapper">
    <div class="container-fluid pb-0">
       <div class="top-mobile-search">
          <div class="row">
             <div class="col-md-12">
                <form class="mobile-search">
                   <div class="input-group">
                      <input type="text" placeholder="Search for..." class="form-control">
                      <div class="input-group-append">
                         <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
       {{-- @include('students.category') --}}
       @foreach($Courses as $Courses)
       <?php $Topics = DB::table('topics')->where('course_id',$Courses->id)->get(); ?>
       <div class="video-block section-padding">
          <div class="row">
             <div class="col-md-12">
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
                   <h3>{{$Courses->title}}</h3>
                   <hr class="mt-0">
                </div>
             </div>
             @foreach($Topics as $Topics)
             <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                   <div class="video-card-image">
                      <a class="play-icon" href="{{url('/')}}/apps/player/{{$Topics->video_encryption}}"><i class="fas fa-play-circle"></i></a>
                      <a href="{{url('/')}}/apps/player/{{$Topics->video_encryption}}"><img class="img-fluid" src="{{url('/')}}/uploads/topics/{{$Topics->placeholder}}" alt=""></a>
                      <div class="time">{{$Topics->video_duration}}</div>
                   </div>
                   <div class="video-card-body">
                      <div class="video-title">
                         <a href="{{url('/')}}/apps/player/{{$Topics->video_encryption}}">{{$Topics->title}}</a>
                      </div>
                      <div class="video-page text-success">
                         {{$Settings->sitename}} <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>

                      <div class="video-view">
                         {{$Topics->video_views}} views &nbsp;<i class="fas fa-calendar-alt"></i> <span class="pull-right"><?php echo timeAgo($Topics->created_at) ?></span>
                      </div>
                   </div>
                </div>
             </div>
             @endforeach
          </div>
       </div>
       <hr class="mt-0">
       @endforeach
     
    </div>
    @include('students.footer')
 </div>
 @endforeach
@endsection