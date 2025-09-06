@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->
        
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Edit  Video</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/topics"><i class="fa fa-backward" aria-hidden="true"></i> All Topics</a>
                    </li>
                </ul>
               
            </div>
            <div class="sb2-2-Edit-Topic sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit  Video</h4>
                        <p> Create Video  </p>
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif
           
                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/edit_HomeVideo/{{$Vids->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">

                                <div class="input-field col s12">
                                    <input autocomplete="off" name="section" id="list-title" value="{{$Vids->section}}" type="text" class="validate">
                                    <label for="list-title">Topic Title</label>
                                </div>

                            </div>

                           

                            
                          
                       
                            <div class="input-field col s12">
                                <div class="file-field">
                                    <div class="btn">
                                        <span>Video</span>
                                        <input id="file" name="file" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input   class="file-path validate" type="text" placeholder="Upload Topic Video">
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('file') }}</span>

                            <video oncontextmenu="return false;" width="100%" height="320" controls controlsList="nodownload"> 
                                <source src="{{url('/')}}/uploads/banners/{{$Vids->video}}" type="video/mp4"> 
                          </video> 
                            {{--  --}}
                            
                            <br><br>
  {{-- Images --}}
                                 {{-- Preview --}}
                            {{-- Style --}}
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 100%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 100%;
                                }
                            </style>
                         
                           
                     
                          
                            <input type="hidden" name="video_cheat" value="{{$Vids->video}}">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

@endsection