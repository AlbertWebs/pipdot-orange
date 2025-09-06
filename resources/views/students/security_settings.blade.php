@extends('students.master')
@section('content')
<div id="content-wrapper">
    {{--  --}}
    <div class="container-fluid upload-details">
        <div class="row">
           <div class="col-lg-12">
              <div class="main-title">

                 <h6>Security Settings</h6>
                 <center>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    @if(Session::has('messageError'))
                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                    @endif
                </center>
              </div>
           </div>
        </div>
        <form method="POST" action="{{url('/')}}/apps/update-password" autocomplete="off">

           {{csrf_field()}}
           <div class="row">
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label"> Current Password <span class="required">*</span></label>
                    <input autocomplete="new-password" class="form-control border-form-control" name="previous" type="text">
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label"> New Password <span class="required">*</span></label>
                    <input autocomplete="off" class="form-control border-form-control" value="" name="newPassword" type="password">
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label"> New Password Confirm <span class="required">*</span></label>
                    <input autocomplete="off" class="form-control border-form-control" value="" name="newPasswordConfirm" type="password">
                 </div>
              </div>
              
           </div>
         
           <div class="row">
              <div class="col-sm-12 text-right">
                 <a href="{{url('/')}}/apps/home" type="button" class="btn btn-danger border-none"> Cancel </a>
                 <button type="submit" class="btn btn-success border-none"> Save Changes </button>
              </div>
           </div>
        </form>
     </div>
    {{--  --}}
    @include('students.footer')
 </div>
@endsection