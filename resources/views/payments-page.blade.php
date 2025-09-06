<!--
   Author: Designekta Studios
   Author URL: http://designekta.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php $CourseSelected = DB::table('courses')->where('id',$id)->get(); ?>
   @foreach ($CourseSelected as $CourseSelected)
    
   <!DOCTYPE html>
   <html>
      <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
      @foreach ($SiteSettings as $Settings)
      <head>
         <title>{{$page_title}} :: {{$Settings->sitename}}</title>
         <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
         <!-- for-mobile-apps -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta name="keywords" content="" />
       
         <!-- //for-mobile-apps -->
         <link href="{{asset('payments/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
         <link href="{{asset('payments/fonts.googleapis.com/css27e0.css?family=Fugaz+One')}}" rel='stylesheet' type='text/css'>
         <link href="{{asset('payments/fonts.googleapis.com/csscd27.css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic')}}" rel='stylesheet' type='text/css'>
         <link href="{{asset('payments/fonts.googleapis.com/cssaa44.css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')}}" rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="{{asset('payments/js/jquery.min.js')}}"></script>
      </head>
      <body>
         <script src="{{asset('payments/m.servedby-buysellads.com/monetization.js')}}" type="text/javascript"></script>
      
         <meta name="robots" content="noindex">
         <body>
            <link rel="stylesheet" href="{{asset('payments/assests/css/font-awesome.min.css')}}">
            <!-- New toolbar-->
            @include('paymentscss')
           
            <div class="main">
               <h1>
                  <img width="300" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}">
               </h1>
               <div class="content">
                  <script src="{{asset('payments/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
                  <script type="text/javascript">
                     $(document).ready(function () {
                         $('#horizontalTab').easyResponsiveTabs({
                             type: 'default', //Types: default, vertical, accordion           
                             width: 'auto', //auto or any width like 600px
                             fit: true   // 100% fit in a container
                         });
                     });
                     
                  </script>
                  <div class="sap_tabs">
                     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <div class="pay-tabs">
                           <h2>Select Payment Method</h2>
                           <ul class="resp-tabs-list">
                              <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic3"></label>M-PESA Online</span></li>
                              <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>M-PESA</span></li>
                              <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li>
                              <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Bitcoin</span></li>
                              {{-- <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Bitcoin</span></li> --}}
                              <div class="clear"></div>
                           </ul>
                        </div>
                        <div class="resp-tabs-container">
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                              <div class="payment-info">
                                 {{-- <h3>Lipa Na M-PESA Online</h3> --}}
                                 <form method="post" id="stk-submit">
                                    {{csrf_field()}}
                                    <div class="tab-for">
                                       <h5>You will pay with</h5>
                                       <?php 
                                          $Price = $CourseSelected->price;
                                          $InKES = round($Price*$USD_KES,0);
                                       ?>
                                       <input value="{{Auth::user()->mobile}}" name="phone_number" value="{{Auth::user()->mobile}}" placeholder="254723000000" type="text" value="">
                                       <input type="hidden" value="{{$InKES}}" name="Amount">
                                       <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                    </div>
                                  
                                    <button type="submit">PAY NOW: KES {{$InKES}}.00 &nbsp; &nbsp;
                                        <img class="spinner" width="15" src="{{asset('theme/img/ZZ5H.gif')}}" alt="">
                                    </button>
                                    <p style="text-align:center; border-radius:10px; color:#002e44;" class="instructions alert-success">Check your phone...</p>
                                 </form>
                                 
                                 
                              </div>
                           </div>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                              <div class="payment-info">
                                
                                 <h3>Lipa Na M-PESA Paybill</h3>
                                 <li>Go To Your M-PESA Menu</li>
                                 <li>Select Lipa Na M-PESA</li>
                                 <li>Select Paybil</li>
                                 <li>Enter Paybill Number {{$Settings->mpesa}}</li>
                                 <li>Enter Amount  {{$InKES}}</li>
                                 <li>Enter Account Number PFXUSER{{$id}}</li>
                                 <li>Enter Your M-PESA Pin to confirm</li>
                                 <li>Enter The Transaction code here to confirm</li>

                                 <br>
                                 <form method="post" id="verify-submit">
                                    {{csrf_field()}}
                                    <div class="tab-for">
                                       <h5>M-PESA Transaction Code</h5>
                                       <input name="transcode" placeholder="P0DHAOE7W9W" type="text" value="">
                                       <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                    </div>
                                   
                                    <button type="submit">Verify Payment &nbsp; &nbsp;
                                       <img class="spinner" width="15" src="{{asset('theme/img/ZZ5H.gif')}}" alt="">
                                   </button>
                                   <p style="text-align:center; border-radius:10px; color:#002e44;" class="instruction alert-success">Verifying....</p>
                                 </form>
                              </div>
                           </div>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                              <div class="payment-info">
                                 <h3>PayPal</h3>
                                 <div class="login-tab">
                                    <div class="user-login">
                                    
                                       <form method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}">
                                          {{ csrf_field() }}
                                          <input id="amount" type="hidden" class="form-control" name="amount" value="{{$CourseSelected->price}}" autofocus>
                                             <button type="submit">PAY NOW: USD {{$CourseSelected->price}}.00</button>
                                             <div class="clear"></div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                              <div class="payment-info">
                                 
                                 <form method="GET" action="{{url('/')}}/bitpay/app/buy.php">  
                                    <input type="hidden" name="id" value="1">
                                    <?php $Price = $CourseSelected->price ?>
                                    <button type="submit">PAY NOW: BTC <?php echo round( $dollar * $Price,8 ) ?></button>
                                 </form>
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <p style="max-width:550px; margin:0 auto" class="footer"><strong>Please note:</strong> {{$Settings->sitename}} will never ask you for your password, PIN, CVV or full card details over the phone or via email.
                     Need help? Contact us on <a href="{{url('/')}}/contact-us">{{url('/')}}/contact-us</a></p>
               </div>
               
               <p class="footer">Copyright © <?php echo date('Y') ?> {{$Settings->sitename}} | All Rights Reserved | Secured by <a href="https://letsencrypt.org" target="_blank">Let's Encrypt</a></p>
            </div>
            <hr>
            <div style="text-align:center; margin:20px; color:#002e44 !important">
               <a style="text-align:center; color:#002e44 !important; font-weight:600" href="{{url('/')}}">BACK TO PIPDOT FX</a>
            </div>
            <div id = "v-w3layouts"></div>
            <script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "{{asset('payments/a.vdo.ai/core/v-w3layouts/vdo.ai.js')}}");</script>
            {{--  --}}
            <script>
               $( document ).ready(function() {
                  $('.spinner').hide();
                  $('.instructions').hide();
                  $('.instruction').hide();
               });

               $("#stk-submit").submit(function(stay){
                     stay.preventDefault()
                     var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
                     $('.spinner').show();
                     $('.instructions').delay(2000).fadeIn();
                     $.ajax({
                        type: 'POST',
                        url: "{{url('/')}}/api/v1/stk/push",
                        data: formdata, // here $(this) refers to the ajax object not form
                        success: function (data) {
                           $('.spinner').hide();
                           $('.instructions').delay(4000).html('Success...');
                           $('.instructions').delay(1000).html('Redirecting....');
                           setTimeout(function() {
                              // Redirect
                              window.location.href = "{{url('/')}}/apps/home";
                           }, 5000);
                        },
                        timeout: 5000 
                     });
               });

               $("#verify-submit").submit(function(stay){
                     stay.preventDefault()
                     var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
                     $('.spinner').show();
                     $('.instruction').delay(2000).fadeIn();
                     $.ajax({
                        type: 'POST',
                        url: "{{url('/')}}/api/v1/c2b/verify",
                        data: formdata, // here $(this) refers to the ajax object not form
                        success: function (data) {
                           if(data == 'Success'){
                              $('.instruction').delay(4000).html('Your Payment Has Been Verified!...Redirecting...');
                              setTimeout(function() {
                                 // Redirect
                                 window.location.href = "{{url('/')}}/apps/home";
                              }, 5000);
                           }else{
                              $('.spinner').hide();
                              $('.instruction').delay(1000).html('Unable To Verify Your Payment Please Contact Us On Our Contact Form');
                           }
                        },
                        timeout: 5000 
                     });
               });

               
            </script>
            {{--  --}}
      </body>
      @endforeach
@endforeach
   </html>
   
  
