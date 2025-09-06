<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>

<main>

        <!-- section content begin -->
        <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-2" data-src="<?php echo e(asset('theme/img/in-profit-decor-3.svg')); ?>" data-uk-img="" style="background-image: url('<?php echo e(asset('theme/img/in-profit-decor-3.svg')); ?>'');">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2>Copy Trading.</h2>
                        <p class="uk-text-lead">Talk to us today and subscribe to our copy trading services.
                            We engage traders who wish to replicate or copy the trades we place at pipdot.
                            To know more about this, drop us an email on <a href="mailto:info@pipdotfx.com">info@pipdotfx.com</a> or call us today and speak to one of our representatives.</p>
 
                        <i class="fas fa-chevron-down uk-text-primary"></i>
                    </div>
                    <div class="uk-width-5-6@m">
                        <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-margin-medium-top uk-grid" data-uk-grid="">
                           
                            <div class="uk-width-1-1 uk-grid-margin">
                                <div class="uk-card uk-card-default uk-card-body in-profit-appcard">
                                    <div class="uk-child-width-4-6@m uk-grid" data-uk-grid="">
                                        <div class="uk-first-column">
                                            <div data-uk-margin="">
                                                <a href="<?php echo e($Settings->facebook); ?>" class="uk-button in-button-app uk-margin-small-right uk-first-column">
                                                    <i class="fab fa-facebook fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Facebook</span></span>
                                                </a>
                                                <a href="<?php echo e($Settings->twitter); ?>" class="uk-button in-button-app">
                                                    <i class="fab fa-twitter fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Twitter</span></span>
                                                </a>
                                                <a href="<?php echo e($Settings->instagram); ?>" class="uk-button in-button-app">
                                                    <i class="fab fa-instagram fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Instagram</span></span>
                                                </a>
                                                <a href="<?php echo e($Settings->telegram); ?>" class="uk-button in-button-app">
                                                    <i class="fab fa-telegram fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Telegram</span></span>
                                                </a>
                                                <a href="<?php echo e($Settings->youtube); ?>" class="uk-button in-button-app">
                                                    <i class="fab fa-youtube fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Youtube</span></span>
                                                </a>
                                                <a href="<?php echo e($Settings->linkedin); ?>" class="uk-button in-button-app">
                                                    <i class="fab fa-linkedin fa-2x"></i>
                                                    <span class="wrapper">Follow Us<span>Linkedin</span></span>
                                                </a>
                                            </div>
                                            <hr>
                                            <p>Trade on <span class="uk-text-bold uk-text-primary">world class platform</span> without a doubt.</p>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-grid uk-grid-divider uk-grid-match in-profit-tradestatus" data-uk-grid>
                                    <div class="uk-width-1-1 uk-width-auto@m">
                                        <div class="uk-flex uk-flex-left uk-flex-center@m">
                                            <div class="uk-grid uk-grid-small uk-flex-middle">
                                                <div class="uk-width-auto">
                                                    <i class="fas fa-phone fa-2x in-icon-wrap circle primary-color"></i>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h1 class="uk-margin-remove-bottom"><?php echo e($Settings->mobile_one); ?></h1>
                                                    <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">Contact The Experts</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-expand@m uk-flex-middle">
                                        <p class="uk-text-lead">To Learn to Trade & Invest in Stocks, Currencies, Indices, and Commodities (CFDs).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <?php echo $__env->make('front.chart-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                    <h1>Legal Docs</h1>
                </div>
                <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <i class="fas fa-file fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Terms of Service</h3>
                        <p>Read the Terms of Service and License Agreement for <?php echo e($Settings->sitename); ?></p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="<?php echo e(url('/')); ?>/terms-and-conditions"><i class="fas fa-link fa-sm uk-margin-small-right"></i>Term of Services</a></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fas fa-globe fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Policies</h3>
                        <p>Find out more about what information we collect at <?php echo e($Settings->sitename); ?>, how we use it, and what control you have over your data.</p>
                        <ul class="uk-list uk-margin-top">
                            <li><a class="uk-flex uk-flex-middle" href="<?php echo e(url('/')); ?>/privacy-policy"><i class="fas fa-link fa-sm uk-margin-small-right"></i>Privacy Statement</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <i class="fas fa-shield-alt fa-lg in-icon-wrap circle primary-color"></i>
                        <h3 class="uk-margin-top">Security</h3>
                        <p>Learn more about how we keep your work and personal data safe when you’re using our services.</p>
                        <ul class="uk-list uk-margin-top">
                            
                            <li><a class="uk-flex uk-flex-middle" href="<?php echo e(url('/')); ?>/privacy-policy"><i class="fas fa-link fa-sm uk-margin-small-right"></i>Responsible Disclosure Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    
    <!-- section content end -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    
      $('#searcher').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '<?php echo e(URL::to('search-faq')); ?>',
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

</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/copy_trading.blade.php ENDPATH**/ ?>