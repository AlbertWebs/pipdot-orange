@extends('students.master')
@section('content')
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
       <div class="video-block section-padding">
          <div class="row">
             <div class="col-md-12">
                <div class="main-title">
                   <h6>Bonus Videos</h6>
                </div>
             </div>
             @foreach($Topics as $Topic)
             {{-- Iteration Starts Here --}}
             <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                   <div class="video-card-image">
                      <a data-toggle="modal" class="play-icon" href="#myModal_{{$Topic->slung}}"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="{{url('/')}}/uploads/topics/{{$Topic->placeholder}}" alt=""></a>
                      <div class="time">{{$Topic->video_duration}}</div>
                   </div>
                   <div class="video-card-body">
                      <div class="video-title">
                        <a href="{{url('/')}}/apps/player/{{$Topic->video_encryption}}">{{$Topic->title}}</a>
                      </div>
                      <div class="video-page text-success">
                         <?php $Course = DB::table('courses')->where('id',$Topic->course_id)->get(); ?>@foreach($Course as $Course) {{$Course->title}} @endforeach  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        {{$Topic->video_views}} views &nbsp; &nbsp;  | &nbsp; &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($Topic->created_at) ?>
                      </div>
                   </div>
                </div>
             </div>
             {{-- Iteration Stops Here --}}
             @endforeach
          </div>
       </div>
       <hr class="mt-0">
     
    </div>
    @include('students.footer')
 </div>
 {{--  --}}
 @foreach($Topics as $Topic)
 
  
   <script>
      $(document).ready(function(){
          /* Get iframe src attribute value i.e. YouTube video url
          and store it in a variable */
          var url = $("#cartoonVideo").attr('src');
          
          /* Assign empty url value to the iframe src attribute when
          modal hide, which stop the video playing */
          $("#myModal_{{$Topic->slung}}").on('hide.bs.modal', function(){
              $("#cartoonVideo").attr('src', '');
          });
          
          /* Assign the initially stored url back to the iframe src
          attribute when modal is displayed again */
          $("#myModal_{{$Topic->slung}}").on('show.bs.modal', function(){
              $("#cartoonVideo").attr('src', url);
          });
      });
      </script>
   
   <!-- Modal HTML -->
   <div id="myModal_{{$Topic->slung}}" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">{{$Topic->title}}</h5>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                 <div class="embed-responsive embed-responsive-16by9">
                   <iframe id="cartoonVideo" class="embed-responsive-item" width="660" height="415" src="//www.youtube.com/embed/{{$Topic->video}}" allowfullscreen></iframe>
                 </div>
               </div>
           </div>
       </div>
   </div>
   @endforeach

 {{--  --}}
@endsection