
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)<footer class="sticky-footer">
    <section class="section-padding footer-list">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-3">
                <div class="footer-logo mb-4"><a class="logo" href="{{url('/')}}/apps/home"><img alt="" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" class="img-fluid"></a></div>
                <p>{{$Settings->location}} {{$Settings->address}}</p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-mobile fa-fw"></i> {{$Settings->mobile_one}}</a></p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-envelope fa-fw"></i> {{$Settings->email}} </a></p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-globe fa-fw"></i> {{$Settings->url}}</a></p>
             </div>
             <div class="col-lg-4 col-md-2">
                <h6 class="mb-4">Company</h6>
                <ul>
                   <li><a href="{{url('/')}}/about-us">About us</a></li>
                   <li><a href="{{url('/')}}/frequently-asked-questions">FAQ</a></li>
                   <li><a href="{{url('/')}}/privacy-policy">Privacy</a></li>
                   <li><a href="{{url('/')}}/terms-and-conditions">Terms</a></li>
                   <li><a href="{{url('/')}}/contact-us">Contact us</a></li>
                </ul>
             </div>
        
             
             <div class="col-lg-4 col-md-3">
                <h6 class="mb-4">NEWSLETTER</h6>
                <div class="input-group">
                   <input type="text" class="form-control" placeholder="Email Address...">
                   <div class="input-group-append">
                      <button class="btn btn-primary" type="button"><i class="fas fa-arrow-right"></i></button>
                   </div>
                </div>
                <small> Subscribe to get our latest updates </small>
                {{-- after we build the app --}}
                {{-- <h6 class="mb-2 mt-4">DOWNLOAD APP</h6>
                <div class="app">
                   <a href="#"><img alt="" src="img/google.png"></a>
                   <a href="#"><img alt="" src="img/apple.png"></a>
                </div> --}}
             </div>
          </div>
       </div>
    </section>
 </footer>
 @endforeach