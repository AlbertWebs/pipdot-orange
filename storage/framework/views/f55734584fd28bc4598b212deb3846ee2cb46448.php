<!DOCTYPE html>
<html lang="en">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="<?php echo e($Settings->sitename); ?> User Dashboard">
      <meta name="author" content="Designekta Studios">
      <title><?php echo e($page_title); ?> - <?php echo e($Settings->sitename); ?></title>
      <?php echo $__env->make('favicon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <link href="<?php echo e(asset('userdashboard/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('userdashboard/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo e(asset('userdashboard/css/pipdot.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo e(asset('userdashboard/vendor/owl-carousel/owl.carousel.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('userdashboard/vendor/owl-carousel/owl.theme.css')); ?>">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
      <style>
         .search-results{
            transition-duration: 0.15s;
            transition-timing-function: cubic-bezier(0.05, 0, 0, 1);
            will-change: transform;
            position: relative;
            color:#002e44 !important;
            font-weight:600;
            font-size: 16px;
            position:absolute;
            background-color:rgba(255,255,255,0.9);
            z-index: 10;
            width: 607px;
            
         }
         .search-results a{
            color:#002e44 !important; 
            max-width: 100%;
         }
      </style>
   </head>
   
      <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="<?php echo e(url('/')); ?>/apps/home"><img width="130" class="img-fluid" alt="<?php echo e($Settings->sitename); ?>" src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>"></a>
         <?php echo $__env->make('students.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item dropdown no-arrow mx-1">
               <a title="Notifications" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">0</span>
               </a>
               
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <a title="All Topics" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-video fa-fw"></i>
               <span class="badge badge-danger"><?php echo count($Topics = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->get()) ?>+</span>
               </a>
            
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <a title="All Courses" class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-graduation-cap fa-fw"></i>
               <span class="badge badge-success"><?php echo count($Topics = DB::table('courses')->get()) ?></span>
               </a>
            
            </li>
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img alt="#" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e(Auth::user()->image); ?>">
               <?php echo e(Auth::user()->name); ?>

               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="<?php echo e(url('/')); ?>/apps/contact-admin"><i class="fas fa-fw fa-comment"></i> &nbsp; Contact Admin</a>
                  <a class="dropdown-item" href="<?php echo e(url('/')); ?>/apps/security-settings"><i class="fas fa-fw fa-lock"></i> &nbsp; My Password</a>
                  <a class="dropdown-item" href="<?php echo e(url('/')); ?>/apps/settings"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <?php echo $__env->make('students.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->yieldContent('content'); ?>
      </div>
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?php echo e(url('/')); ?>/logout">Logout</a>
               </div>
            </div>
         </div>
      </div>

      <script data-cfasync="false" src="<?php echo e(asset('userdashboard/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')); ?>"></script>
      <script src="<?php echo e(asset('userdashboard/vendor/jquery/jquery.min.js')); ?>" type="b2a0c4d9b61271ad7bf70fa6-text/javascript"></script>
      <script src="<?php echo e(asset('userdashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>" type="b2a0c4d9b61271ad7bf70fa6-text/javascript"></script>
      <script src="<?php echo e(asset('userdashboard/vendor/jquery-easing/jquery.easing.min.js')); ?>" type="b2a0c4d9b61271ad7bf70fa6-text/javascript"></script>
      <script src="<?php echo e(asset('userdashboard/vendor/owl-carousel/owl.carousel.js')); ?>" type="b2a0c4d9b61271ad7bf70fa6-text/javascript"></script>
      <script src="<?php echo e(asset('userdashboard/js/custom.js')); ?>" type="b2a0c4d9b61271ad7bf70fa6-text/javascript"></script>
      <script src="<?php echo e(asset('userdashboard/ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')); ?>" data-cf-settings="b2a0c4d9b61271ad7bf70fa6-|49" defer=""></script>
   

      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script type="text/javascript">
     
         $('#searcher').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
               type: 'get',
               url: '<?php echo e(URL::to('search')); ?>',
               data: {
                  'search': $value
               },
               success: function(data) {
                  $('.search-results').html(data);
               }
            });
         })

     </script>
     <script type="text/javascript">
         $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
     </script>

     
  
     <script>
        $(document).ready(function(e) {
           $('.spinner').hide();
           $('.Thelike').click(function(e){
            $('.spinner').show()   
               e.preventDefault();
               var href = $(this).attr('href');
               //ajax send request
               $.ajax({
                  url :href,
                  type:'GEt',
                  dataType:'html',
                  
                  success:function(data){
                     if(data=='Success'){
                        // $( "#mydiv" ).load(window.location.href + " #mydiv" );
                        location.reload();
                        $('.spinner').hide()
                     }
                     else{

                     }
                  }
                  // 
               })
               // 
           })

           $('#post-comment').submit(function(e){
            //   alert('')
            $('.spinner').show()   
                  e.preventDefault();
               
               $.ajaxSetup({
                  headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
               });
              
         

               $.ajax({
                  type:'POST',
                  url:"<?php echo e(route('ajaxRequest.post')); ?>",
                  data:$('#post-comment').serialize(),
                  success:function(data){
                     // alert(data.success);
                     $('.spinner').hide()
                     location.reload();
                  }
               });

           });

         //   
            //  Post Article
         // 
        });
     
     </script>
     
   </body>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </html><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/master.blade.php ENDPATH**/ ?>