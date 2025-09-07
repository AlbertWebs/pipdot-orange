
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
        <?php echo $__env->make('favicon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                        <center>
                                            <?php if(Session::has('message')): ?>
                                                          <div class="uk-alert-success" uk-alert><?php echo e(Session::get('message')); ?></div>
                                           <?php endif; ?>
                                           <?php if(Session::has('error')): ?>
                                                          <div class="uk-alert-danger" uk-alert><?php echo e(Session::get('error')); ?></div>
                                           <?php endif; ?>
                                           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <?php if($errors->any()): ?>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <h1><?php echo e($error); ?></h1>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <?php if($errors->any()): ?>
                                            <h4><?php echo e($errors->first()); ?></h4>
                                            <?php endif; ?>
                                        </center>
                                        <!-- module logo begin -->
                                        <a class="uk-logo" href="<?php echo e(url('/')); ?>">
                                            <img class="in-offset-top-10" src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" alt="logo" width="230" data-uk-img>
                                        </a>
                                        <!-- module logo begin -->
                                        <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Register your account</p>
                                        <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a href="<?php echo e(url('/')); ?>/forex-courses/register">Sign Up</a></p>
                                        <!-- login form begin -->
                                        <form class="uk-grid uk-form" method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>

                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                                <input name="email" value="<?php echo e(old('email')); ?>"  class="uk-input uk-border-rounded" id="username" value="" type="text" placeholder="email">
                                            </div>


                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <?php if($errors->any()): ?>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <h1><?php echo e($error); ?></h1>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" id="password" value="" type="password" name="password" required placeholder="Password">
                                            </div>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="uk-margin-small uk-width-auto uk-text-small">
                                                <label><input name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> class="uk-checkbox uk-border-rounded" type="checkbox"> Remember me</label>
                                            </div>
                                            <div class="uk-margin-small uk-width-expand uk-text-small">
                                                <label class="uk-align-right"><a class="uk-link-reset" href="<?php echo e(url('/')); ?>/forex-courses/forgot-password">Forgot password?</a></label>
                                            </div>
                                            <div class="uk-margin-small uk-width-1-1">
                                                <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
                                            </div>
                                        </form>
                                        <!-- login form end -->
                                        
                                        <div class="uk-margin-medium-bottom uk-text-center">
                                            
                                            <!--<a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="<?php echo e(url('/')); ?>/apps/facebook"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section content end -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </main>
        <!-- Javascript -->
        <script src="<?php echo e(asset('theme/js/vendors/uikit.min.js')); ?>"></script>
        <script src="<?php echo e(asset('theme/js/vendors/indonez.min.js')); ?>"></script>
    </body>
    </html>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /home/designekta-studios/projects/pipdotfx/resources/views/front/login.blade.php ENDPATH**/ ?>