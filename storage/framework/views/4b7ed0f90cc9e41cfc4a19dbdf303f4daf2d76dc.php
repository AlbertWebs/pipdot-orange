<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="author" content="Designekta Studios">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#002e44" />
    <meta name="google-site-verification" content="Wv89m6bhMCm5QNZUyCKio-xYMDiF7rpff0F_lpC1yWg" />
    <!-- Site Properties -->
    
    <?php echo SEOMeta::generate(); ?>

    <?php echo OpenGraph::generate(); ?>

    <?php echo Twitter::generate(); ?>

    <?php echo JsonLd::generate(); ?>

    <!-- Critical preload -->
    <link rel="preload" href="<?php echo e(asset('theme/js/vendors/uikit.min.js')); ?>" as="script">
    <link rel="preload" href="<?php echo e(asset('theme/css/vendors/uikit.min.css')); ?>" as="style">
    <link rel="preload" href="<?php echo e(asset('theme/css/style.css')); ?>" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="<?php echo e(asset('theme/fonts/fa-brands-400.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset('theme/fonts/fa-solid-900.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="<?php echo e(asset('theme/fonts/lato-v16-latin-700.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset('theme/fonts/lato-v16-latin-regular.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset('theme/fonts/montserrat-v14-latin-600.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('theme/css/vendors/uikit.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/css/style.css')); ?>">
    <?php echo $__env->make('favicon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('tawk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .dont-show{
            /* display: none; */
            font-size:0px;
            padding: 0 !important;
            margin:0 !important;
        }
    </style>
    <?php echo $__env->make('google', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>

        <!-- header content begin -->
        
        <div class="uk-section uk-padding-remove-vertical">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-laogo" href="<?php echo e(url('/')); ?>">
                                <img class="in-offset-top-10" src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" data-src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" alt="logo" width="230"  data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="<?php echo e(url('/')); ?>">Home<i class="fas fa-home"></i></a>
                              
                            </li>
                            <li><a href="<?php echo e(url('/')); ?>/about-us">About Us</a></li>
                            <li><a href="<?php echo e(url('/')); ?>/forex-courses">Forex Course<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <?php $Courses = DB::table('courses')->get(); ?>
                                        <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(url('/')); ?>/forex-courses/<?php echo e($courses->slung); ?>"><?php echo html_entity_decode($courses->title, ENT_QUOTES, 'UTF-8'); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                            
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="<?php echo e(url('/')); ?>/articles">Our Blog<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                
                                                <li><a href="<?php echo e(url('/')); ?>/frequently-asked-questions">FAQ</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#"><?php echo e($Settings->tagline); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="<?php echo e(url('/')); ?>/copy-trading">Copy Trading</a></li>
                            <li><a href="<?php echo e(url('/')); ?>/contact-us">Contact US</a></li>
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <?php if(Auth::user()): ?>
                            <div>
                                <a href="<?php echo e(url('/')); ?>/apps/home" class="uk-button uk-button-text">Student Portal</a>
                                
                            </div>
                            <?php else: ?> 
                            <div>
                                <a href="<?php echo e(url('/')); ?>/forex-courses/login" class="uk-button uk-button-text">Student Portal</a>
                                
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Javascript -->
    <script rel="preload"  src="<?php echo e(asset('theme/js/vendors/uikit.min.js')); ?>"></script>
    <script rel="preload" src="<?php echo e(asset('theme/js/vendors/indonez.min.js')); ?>"></script>
    <script rel="preload"  src="<?php echo e(asset('theme/js/tp.widget.bootstrap.min.js')); ?>" defer></script>
    <script rel="preload"  src="<?php echo e(asset('theme/js/config-theme.js')); ?>"></script>
    <?php echo $__env->make('front.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</html><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/master.blade.php ENDPATH**/ ?>