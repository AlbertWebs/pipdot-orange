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

       
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- Javascript -->
    <script rel="preload"  src="<?php echo e(asset('theme/js/vendors/uikit.min.js')); ?>"></script>
    <script rel="preload"  src="<?php echo e(asset('theme/js/vendors/indonez.min.js')); ?>"></script>
    <script rel="preload"  src="<?php echo e(asset('theme/js/tp.widget.bootstrap.min.js')); ?>" defer></script>
    <script rel="preload"  src="<?php echo e(asset('theme/js/config-theme.js')); ?>"></script>
</body>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</html><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/master-payment.blade.php ENDPATH**/ ?>