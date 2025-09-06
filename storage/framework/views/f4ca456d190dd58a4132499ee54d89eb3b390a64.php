<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>

<main>

        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-content-10">
                        <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-background-bottom-left uk-background-contain" style="background-image: url(<?php echo e(asset('theme/img/in-content-10-image.png')); ?>);">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-5@m uk-text-center">
                                    <form class="uk-search uk-search-default uk-width-1-1 uk-margin-bottom">
                                        <span data-uk-search-icon></span>
                                        <input class="uk-search-input uk-border-pill" id="searcher" name="search" type="search" autocomplete="off" placeholder="Search for articles...">
                                        <div class="search-results"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" data-uk-grid>
                            
                                
                            <?php $__currentLoopData = $FAQ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <h3 class="uk-heading-bullet"><a class="uk-link-text" href="<?php echo e(url('/')); ?>/frequently-asked-questions/<?php echo e($item->slung); ?>"><?php echo e($item->title); ?></a></h3>
                                <div class="uk-grid uk-grid-small" data-uk-grid>
                                    <div class="uk-width-expand@m">
                                        <p><?php echo e($item->meta); ?></p>
                                    </div>
                                    <div class="uk-width-auto@m">
                                        <i class="fas fa-question fa-3x in-icon-wrap small transparent uk-margin-left"></i>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

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
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/faq.blade.php ENDPATH**/ ?>