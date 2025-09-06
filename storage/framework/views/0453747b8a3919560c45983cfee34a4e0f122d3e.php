<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>
<?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $About): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-small-bottom">About<br /><span class="in-highlight"><?php echo e($Settings->sitename); ?></span></h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove-top"><?php echo html_entity_decode($About->content, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
                <hr>
                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
  <!-- section content end -->
  <?php $Banners = DB::table('banners')->where('name','home_page_three')->get(); ?>
  <?php $__currentLoopData = $Banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <!-- section content begin -->
  <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3" data-src="<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($Banners->image); ?>" data-uk-img>
      <div class="uk-container uk-margin-small-bottom">
          <div class="uk-grid-large" data-uk-grid>
              <div class="uk-width-1-1@m">
                  <h2>We are committed to meeting your FX trading needs</h2>
                  <p class="uk-text-lead"> Pipdot FX is always exploring the future. We learn, utilize and teach the best and simple trading strategies. <br> Our trading strategies gained from our educational material will provide you with comprehensive trading knowledge.</p>
              </div>
              <div class="uk-width-1-1">
                  <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-small-top" data-uk-grid>
                      <div>
                          <h1 class="uk-heading-bullet">
                              <span class="count" data-counter-end="45">0</span>+
                          </h1>
                          <h3>Tutorials</h3>
                      </div>
                      <div>
                          <h1 class="uk-heading-bullet">
                              <span class="count" data-counter-end="24">0</span>Hours
                          </h1>
                          <h3>Support</h3>
                      </div>
                      <div>
                          <h1 class="uk-heading-bullet">
                              <span class="count" data-counter-end="10">0</span>+
                          </h1>
                          <h3>Support Staff</h3>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- section content end -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <!-- section content begin -->
     <div class="uk-section uk-section-muted ">
        <div class="uk-container">
            <div class="uk-grid">
                <hr>
                
                <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i>
                        </div>
                        <div>
                            <h3>Mission</h3>
                            <p><?php echo html_entity_decode($About->mission, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i>
                        </div>
                        <div>
                            <h3>Vision</h3>
                            <p><?php echo html_entity_decode($About->vision, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


    <?php echo $__env->make('front.courses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/about.blade.php ENDPATH**/ ?>