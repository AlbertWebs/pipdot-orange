
    <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
    <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!DOCTYPE html>
    <html lang="zxx" dir="ltr">
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="description" content="PipdotFX Consultants Limited">
        <meta name="keywords" content="Pipdot Fx Consultants">
        <meta name="author" content="Designekta Studios">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#e9e8f0" />
        <!-- Site Properties -->
        <title>Sign in - <?php echo e($Settings->sitename); ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/css/vendors/uikit.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('theme/css/style.css')); ?>">
    </head>

    <body>
        <!-- preloader begin -->
        <div class="in-loader">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- preloader end -->
        <main>
            <?php $Banner = DB::table('banners')->where('name','signin')->get(); ?>
            <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- section content begin -->
            <div class="uk-section uk-padding-remove-vertical">
                <div class="uk-container uk-container-expand">
                    <div class="uk-grid" data-uk-height-viewport="expand: true">
                        <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url('<?php echo e(url('/uploads/banners')); ?>/<?php echo e($Banner->image); ?>');">
                        </div>
                        <div class="uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-grid uk-flex-center">
                                <div class="uk-width-3-5@m">
                                    <div class="in-padding-horizontal@s">
                                        <!-- module logo begin -->
                                        <a class="uk-logo" href="<?php echo e(url('/')); ?>">
                                            <img class="in-offset-top-10" src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" alt="logo" width="230" data-uk-img>
                                        </a>
                                        <!-- module logo begin -->
                                        <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Register your account</p>
                                        <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Already have an account? <a href="<?php echo e(url('/')); ?>/forex-courses/login">Login here</a></p>
                                        <!-- login form begin -->
                                        <form class="uk-grid uk-form" method="POST" action="<?php echo e(route('register')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                                <input autocomplete="off" name="name" value="<?php echo e(old('name')); ?>" required class="uk-input uk-border-rounded" id="username" type="text" placeholder="Full Name">
                                            </div>
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                                <input onblur="duplicateEmail(this)" autocomplete="off" class="uk-input uk-border-rounded" id="username" name="email" value="<?php echo e(old('email')); ?>" required type="text" placeholder="email">
                                            </div>

                                                <small id="emailChecker" class="uk-alert-danger" uk-alert>This Email Has Been Used By Another User</small>


                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                                <input autocomplete="off" class="uk-input uk-border-rounded" id="password" name="password" type="password" placeholder="Password">
                                            </div>
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                                <input autocomplete="off" class="uk-input uk-border-rounded" id="password" name="password_confirmation" type="password" placeholder="Password Confirm">
                                            </div>

                                            <div class="uk-margin-small uk-width-1-1">
                                                <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign Up</button>
                                            </div>
                                        </form>
                                        <!-- login form end -->
                                        
                                        <div class="uk-margin-medium-bottom uk-text-center">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section content end -->

        </main>
        <!-- Javascript -->
        <script src="<?php echo e(asset('theme/js/vendors/uikit.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/vendors/indonez.min.js')); ?>"></script>

        <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    $( document ).ready( function(){

        $('#emailChecker').hide()
    });


</script>
        
        <script>
            function duplicateEmail(element){
                    var email = $(element).val();
                    $.ajax({
                        type: "POST",
                        url: '<?php echo e(url('checkemail')); ?>',
                        data: {email:email,"_token": "<?php echo e(csrf_token()); ?>"},
                        dataType: "json",
                        success: function(res) {
                            if(res.exists){
                                $('#emailChecker').show()
                            }else{
                                // alert('false');
                                $('#emailChecker').hide()
                            }
                        },
                        error: function (jqXHR, exception) {

                        }
                    });
                }
        </script>
        
    </body>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </html>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/register.blade.php ENDPATH**/ ?>