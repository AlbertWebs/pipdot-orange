@extends('students.master')
@section('content')
<div id="content-wrapper">
    {{--  --}}
    <div class="container-fluid pt-5 pb-5">
        <form method="POST" action="{{url('/')}}/apps/update-image" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
           <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
              {{-- <h1><i class="fas fa-file-upload text-primary"></i></h1> --}}
              <center>
                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                @if(Session::has('messageError'))
                    <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                @endif
            </center>
              <h1><img style="max-width:150px; border-radius:50%" src="{{url('/')}}/uploads/users/{{Auth::user()->image}}" alt="{{Auth::user()->name}}"></h1>
              <h4 class="mt-5">Select Image files to upload</h4>
              <p class="land">or drag and drop video files</p>
              <div class="mt-4">
                <input type="file" name="image" class="btn btn-outline-primary">
             </div>
              <div class="mt-4">
                 <button type="submit" class="btn btn-outline-primary">Upload Image</button>
              </div>
           </div>
        </div>
        <input type="hidden" name="image_cheat" value="{{Auth::user()->image}}">
        </form>
    </div>
    {{--  --}}
    @include('students.footer')
 </div>
@endsection