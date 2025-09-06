@extends('students.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div id="content-wrapper">
    <div class="container-fluid">
        <section class="section-padding">
            <div>
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <h3 class="mt-1 mb-4">Get In Touch</h3>
                     <h6 class="text-dark">Address :</h6>
                     <p>{{$Settings->address}} <br> {{$Settings->location}}</p>
                     <h6 class="text-dark">Phone :</h6>
                     <p>{{$Settings->mobile_one}}</p>
                     <h6 class="text-dark">Mobile :</h6>
                     <p>{{$Settings->mobile_two}}</p>
                     <h6 class="text-dark">Email :</h6>
                     <p><a href="mailto{{$Settings->email_one}}">{{$Settings->email_one}}</a>, <a href="mailto{{$Settings->email}}">{{$Settings->email}}</a></p>
                     <h6 class="text-dark">Website :</h6>
                     <p>{{$Settings->url}}
                    </p>
                  </div>
                  <div class="col-lg-8 col-md-8">
                     <div class="card">
                        <div class="card-body">
                           <iframe src="{{$Settings->map}}" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr>
        <div class="row">
        <div class="col-md-12 mx-auto text-center upload-video pt-5 pb-5">
            <h1><img style="max-width:80px; border-radius:50%" src="{{url('/')}}/theme/img/whatsapp--v1.png" alt="WhatsApp Icon"></h1>
            <form action="https://api.whatsapp.com/send">
                <input type="hidden" name="phone" value="{{$Settings->whatsapp}}">
                <div class="row text-center" style="margin:0 auto;">
                    <div class="col-sm-8  text-center" style="margin:0 auto;">
                    <div class="form-group  text-center" style="margin:0 auto;">
                        <label class="control-label">Message <span class="required">*</span></label>
                        <textarea style="min-height:150px" row="20" placeholder="Your Message Goes Here" name="text" class="form-control border-form-control"></textarea>
                    </div>
                    </div>
                </div>
                <div class="mt-4">
                <button type="submit" class="btn btn-outline-primary">Send Message</button>
                </div>
            </form>
            
        </div>
        </div>
    </div>
@include('students.footer')
</div>
@endforeach
@endsection
