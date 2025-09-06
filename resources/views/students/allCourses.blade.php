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
       
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               <h6>Forex Courses</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Title</th>
                   <th scope="col">Description</th>
                   <th scope="col">Videos</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php $AllCourses = DB::table('courses')->get(); ?>
                 @foreach ($AllCourses as $item)
                 <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>{!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}</td>
                  <td>
                     <?php $Topics = DB::table('topics')->where('course_id',$item->id)->get(); echo count($Topics); ?> Videos
                  </td>
                  <td>
                     @if($item->id == 1)
                        @if($item->id == Auth::user()->course_registered_id)
                        <a  style="color:#ffffff" href="{{url('/')}}/apps/my-course" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                        @else
                        <a style="color:#ffffff" href="{{url('/')}}/secured-payments/{{$item->id}}" class="btn btn-primary">Register Now</a>
                        @endif
                     @else 
                        @if($item->id == Auth::user()->course_2_registered_id)
                        <a  style="color:#ffffff" href="{{url('/')}}/apps/my-course" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                        @else
                        <a style="color:#ffffff" href="{{url('/')}}/secured-payments/{{$item->id}}" class="btn btn-primary">Register Now</a>
                        @endif
                     @endif
                  </td>
                </tr>
                 @endforeach
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       


    </div>
    @include('students.footer')
 </div>
@endsection
