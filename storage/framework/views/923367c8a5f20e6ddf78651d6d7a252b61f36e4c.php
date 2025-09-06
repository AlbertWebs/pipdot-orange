<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!--
   Author: Designekta Studios
   Author URL: http://designekta.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php $CourseSelected = DB::table('courses')->where('id',$id)->get(); ?>
   <?php $__currentLoopData = $CourseSelected; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CourseSelected): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
   <!DOCTYPE html>
   <html>
      <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
      <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <head>
         <title><?php echo e($page_title); ?> :: <?php echo e($Settings->sitename); ?></title>
         <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
         <!-- for-mobile-apps -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta name="keywords" content="" />
       
         <!-- //for-mobile-apps -->
         <link href="<?php echo e(asset('payments/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
         <link href="<?php echo e(asset('payments/fonts.googleapis.com/css27e0.css?family=Fugaz+One')); ?>" rel='stylesheet' type='text/css'>
         <link href="<?php echo e(asset('payments/fonts.googleapis.com/csscd27.css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic')); ?>" rel='stylesheet' type='text/css'>
         <link href="<?php echo e(asset('payments/fonts.googleapis.com/cssaa44.css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')); ?>" rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="<?php echo e(asset('payments/js/jquery.min.js')); ?>"></script>
      </head>
      <body>
         <script src="<?php echo e(asset('payments/m.servedby-buysellads.com/monetization.js')); ?>" type="text/javascript"></script>
      
         <meta name="robots" content="noindex">
         <body>
            <link rel="stylesheet" href="<?php echo e(asset('payments/assests/css/font-awesome.min.css')); ?>">
            <!-- New toolbar-->
            <?php echo $__env->make('paymentscss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
            <div class="main" >
              
               <h1>
                  <img width="300" src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>">
               </h1>
               <div class="content">
                  <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
                     <source src="<?php echo e(url('/')); ?>/uploads/banners/forex.webm" type="video/webm">
                     
                   </video>
                  <script src="<?php echo e(asset('payments/js/easyResponsiveTabs.js')); ?>" type="text/javascript"></script>
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
                        <div class="pay-tabs" style="display:none;">
                           
                           <ul class="resp-tabs-list">
                              
                              <center><li  class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>M-PESA</span></li></center>
                              
                              <div class="clear"></div>
                           </ul>
                        </div>
                        <div class="resp-tabs-container">
                          
                           <?php 
                           $Price = $CourseSelected->price;
                           $InKES = round($Price*$USD_KES,0);
                           $InKESS = 100*$Price;
                        ?>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                              <div class="payment-info">
                                
                                 <h3>Lipa Na M-PESA</h3>
                                 <li style="color:#002e44">Go To Your M-PESA Menu</li>
                                 <li style="color:#002e44" >Select Lipa Na M-PESA</li>
                                 <li style="color:#002e44">Select Buy Goods & Services</li>
                                 <li style="color:#002e44">Enter Till Number <?php echo e($Settings->mpesa); ?></li>
                                 <li style="color:#002e44">Enter Amount  <?php echo e($InKESS); ?></li>
                                 <li style="color:#002e44">Enter Your M-PESA Pin to confirm</li>
                                 <li style="color:#002e44">Enter The Transaction code here to confirm</li>

                                 <br>
                                 <form method="post" id="verify-submit">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="tab-for">
                                       <h5>M-PESA Transaction Code</h5>
                                       <input name="transcode" placeholder="P0DHAOE7W9W" type="text" value="">
                                       <input type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="user_id">
                                    </div>
                                   
                                    <button type="submit">Verify Payment &nbsp; &nbsp;
                                       <img class="spinner" width="15" src="<?php echo e(asset('theme/img/ZZ5H.gif')); ?>" alt="">
                                   </button>
                                   <p style="text-align:center; border-radius:10px; color:#002e44;" class="instruction alert-success">Verifying....</p>
                                 </form>
                              </div>
                           </div>
                           
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                              <div class="payment-info">
                                 
                                 <form method="post" id="stk-submit">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="tab-for">
                                       <h5>You will pay with</h5>
                                       <?php 
                                          $Price = $CourseSelected->price;
                                          $InKES = round($Price*$USD_KES,0);
                                       ?>
                                       <input value="<?php echo e(Auth::user()->mobile); ?>" name="phone_number" value="<?php echo e(Auth::user()->mobile); ?>" placeholder="254723000000" type="text" value="">
                                       <input type="hidden" value="<?php echo e($InKES); ?>" name="Amount">
                                       <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="user_id">
                                    </div>
                                  
                                    <button type="submit">PAY NOW: KES <?php echo e($InKES); ?>.00 &nbsp; &nbsp;
                                        <img class="spinner" width="15" src="<?php echo e(asset('theme/img/ZZ5H.gif')); ?>" alt="">
                                    </button>
                                    <p style="text-align:center; border-radius:10px; color:#002e44;" class="instructions alert-success">Check your phone...</p>
                                 </form>
                                 
                                 
                              </div>
                           </div>
                           
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                              <div class="payment-info">
                                 <h3>PayPal</h3>
                                 <div class="login-tab">
                                    <div class="user-login">
                                    
                                       <form method="POST" id="payment-form" role="form" action="<?php echo URL::route('paypal'); ?>">
                                          <?php echo e(csrf_field()); ?>

                                          <input id="amount" type="hidden" class="form-control" name="amount" value="<?php echo e($CourseSelected->price); ?>" autofocus>
                                             <button type="submit">PAY NOW: USD <?php echo e($CourseSelected->price); ?>.00</button>
                                             <div class="clear"></div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                              <div class="payment-info">
                                 
                                 <form method="GET" action="<?php echo e(url('/')); ?>/bitpay/app/buy.php">  
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
                  <p style="max-width:550px; margin:0 auto" class="footer"><strong>Please note:</strong> <?php echo e($Settings->sitename); ?> will never ask you for your password, PIN, CVV or full card details over the phone or via email.
                     Need help? Contact us on <a href="<?php echo e(url('/')); ?>/contact-us"><?php echo e(url('/')); ?>/contact-us</a></p>
               </div>
               
               <p class="footer">Copyright © <?php echo date('Y') ?> <?php echo e($Settings->sitename); ?> | All Rights Reserved | Secured by <a href="https://letsencrypt.org" target="_blank">Let's Encrypt</a></p>
            </div>
            <hr>
            <div style="text-align:center; margin:20px; color:#002e44 !important">
               <a style="text-align:center; color:#002e44 !important; font-weight:600" href="<?php echo e(url('/')); ?>">BACK TO PIPDOT FX</a>
            </div>
            <div id = "v-w3layouts"></div>
            <script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "<?php echo e(asset('payments/a.vdo.ai/core/v-w3layouts/vdo.ai.js')); ?>");</script>
            
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
                        url: "<?php echo e(url('/')); ?>/api/v1/stk/push",
                        data: formdata, // here $(this) refers to the ajax object not form
                        success: function (data) {
                           $('.spinner').hide();
                           $('.instructions').delay(4000).html('Success...');
                           $('.instructions').delay(1000).html('Redirecting....');
                           setTimeout(function() {
                              // Redirect
                              window.location.href = "<?php echo e(url('/')); ?>/apps/home";
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
                        url: "<?php echo e(url('/')); ?>/api/v1/c2b/verification",
                        data: formdata, // here $(this) refers to the ajax object not form
                        success: function (data) {
                           if(data == 'Success'){
                              $('.instruction').delay(4000).html('We are verifying your payment shortly');
                              setTimeout(function() {
                                 // Redirect
                                 window.location.href = "<?php echo e(url('/')); ?>/apps/home";
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
            
      </body>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </html>
   
  

    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master-payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/payments.blade.php ENDPATH**/ ?>