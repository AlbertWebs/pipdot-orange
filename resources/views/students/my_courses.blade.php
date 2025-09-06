@extends('students.master')
@section('content')
@if(Session::has('course_id'))
<div id="content-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mx-auto text-center  pt-4 pb-5">
            {{--  --}}
            <div class="col-md-12">
               <?php $CourseID = Session::get('course_id'); $AllCourses = DB::table('courses')->where('id',$CourseID)->get(); ?>
               @foreach ($AllCourses as $item)
               <h1><img style="max-width:500px" alt="404" src="{{url('/')}}/uploads/courses/{{$item->image}}" class="img-fluid"></h1>
               <h1>{{$item->title}}</h1>
               <p class="land">{{$item->meta}}</p>
               <div class="mt-5">
                  <a class="btn btn-primary" href="{{url('/')}}/secured-payments/{{$item->id}}"><i class="mdi mdi-home"></i> Register Now </a>
               </div>
               @endforeach
               
            </div>
            {{--  --}}
         </div>
      </div>
   </div>
 
</div>
@else 
{{-- Check if there are registered Courses --}}


<div id="content-wrapper">
   <div class="container-fluid">
      {{-- if both Registered Show Them Here--}}
      @if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == 2)
      <?php $AllCourses = DB::table('courses')->get(); ?>

      @elseif(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == null))
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->get(); ?>


      @elseif(Auth::user()->course_registered_id == null && Auth::user()->course_2_registered_id == 2)
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_2_registered_id)->get(); ?>

      @else 
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->get(); ?>

      @endif
      @if($AllCourses->isEmpty())
      {{-- Else  --}}

      <div class="row">
         <div class="col-md-12 mx-auto text-center  pt-4 pb-5">
            <h1><img style="max-width:500px" alt="404" src="{{asset('userdashboard/img/404-pipdot.png')}}" class="img-fluid"></h1>
            <h1>No registered courses</h1>
            <p class="land">You are seeing this page because you have not registered for any courses</p>
            <div class="mt-5">
               <a class="btn btn-outline-primary" href="{{url('/')}}/apps/allCourses"><i class="mdi mdi-home"></i> Register Course Now </a>
            </div>
         </div>
      </div>
      {{-- End id  --}}
      @else

      <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               <h6>Registered Courses</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Videos</th>
                  <th scope="col">Action</th>
               </tr>
               </thead>
               <tbody>
               
               @foreach ($AllCourses as $item)
               <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>
                     <?php $Topics = DB::table('topics')->where('course_id',$item->id)->get(); echo count($Topics); ?> Videos
                  </td>
                  <td>
                     <a  style="color:#ffffff" href="{{url('/')}}/apps/course-videos" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                  </td>
               </tr>
               @endforeach
               </tbody>
            </table>
         </div>
      </div>

      @endif


   </div>
  
</div>

@endif
@endsection