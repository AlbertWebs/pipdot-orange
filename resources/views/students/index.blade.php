@extends('students.master')
@section('content')
<?php $Topics = DB::table('topics')->get(); $page_active = 'home'; ?>
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
       <div class="top-category section-padding mb-4">
          <div class="row">
             
             <div class="col-md-12">
                <div class="owl-carousel owl-carousel-category">
                   @foreach ($Topics as $item)
                   <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="{{url('/')}}/uploads/topics/{{$item->placeholder}}" alt="">
                           <h6>{{$item->title}}</h6>
                           <p>{{$item->video_views}} views</p>
                        </a>
                     </div>
                  </div>
                   @endforeach
                </div>
             </div>
          </div>
       </div>
       <hr class="mt-0">
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
       <?php 
           $STK = DB::table('lnmo_api_response')->where('user_id',Auth::user()->id)->get(); 
           $Paypal = DB::table('lnmo_api_response')->where('user_id',Auth::user()->id)->get(); 
           $C2B = DB::table('mobile_payments')->where('user_id',Auth::user()->id)->get();
        ?>
       {{-- Paypal --}}
     

       @if($C2B->isEmpty())

       @else
       {{-- M-PESA --}}
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               
               <h6>Transactions(M-PESA)</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Transactions Info</th>
                   <th scope="col">Date and Time</th>
                   <th scope="col">Status</th>
                 </tr>
               </thead>
               <tbody>
                  @foreach ($C2B as $item)
                  <tr>
                     <th scope="row">{{$item->transLoID}}</th>
                     <td>
                        Amount: {{$item->TransAmount}}<br>
                        TransID: {{$item->TransID}}<br>
                     </td>
                     <td>
                        <?php 
                        $RawDate = $item->created_at;
                        $FormatDate = strtotime($RawDate);
                        $Month = date('M',$FormatDate);
                        $Date = date('D',$FormatDate);
                        $date = date('d',$FormatDate);
                        $Year = date('Y',$FormatDate);
                        $Hour = date('H',$FormatDate);
                        $Min = date('i',$FormatDate);
                     ?>
                     {{$Month}} {{$date}}, {{$Year}} | {{$Hour}}:{{$Min}}
                     </td>
                     <td>
                        @if($item->status == 1)
                        <button type="button" class="btn btn-success">Approved</button>
                        @else 
                        <button type="button" class="btn btn-primary">Pending</button>
                        @endif
                     </td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       @endif

       {{-- M-PESA STK --}}

       @if($STK->isEmpty())

       @else
       {{-- M-PESA --}}
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               
               <h6>Transactions(M-PESA STK)</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Transactions Info</th>
                   <th scope="col">Date and Time</th>
                   <th scope="col">Status</th>
                 </tr>
               </thead>
               <tbody>
                  @foreach ($STK as $item)
                  <tr>
                     <th scope="row">{{$item->lnmoID}}</th>
                     <td>
                        Amount: {{$item->Amount	}}<br>
                        MpesaReceiptNumber: {{$item->MpesaReceiptNumber}}<br>
                     </td>
                     <td>
                        <?php 
                        $RawDate = $item->updateTime;
                        $FormatDate = strtotime($RawDate);
                        $Month = date('M',$FormatDate);
                        $Date = date('D',$FormatDate);
                        $date = date('d',$FormatDate);
                        $Year = date('Y',$FormatDate);
                        $Hour = date('H',$FormatDate);
                        $Min = date('i',$FormatDate);
                     ?>
                     {{$Month}} {{$date}}, {{$Year}} | {{$Hour}}:{{$Min}}
                     </td>
                     <td>
                        @if($item->status == 1)
                        <button type="button" class="btn btn-success">Approved</button>
                        @else 
                        <button type="button" class="btn btn-primary">Pending</button>
                        @endif
                     </td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       @endif

       {{-- BTC --}}

    </div>
    @include('students.footer')
 </div>
@endsection
