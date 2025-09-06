<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>
<?php $__currentLoopData = $FAQ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <?php $Banners = DB::table('banners')->where('name','faq_page')->get(); ?>
                <?php $__currentLoopData = $Banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="uk-width-1-1 in-figure-available">
                    <img class="uk-width-1-1 uk-border-rounded" src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(url('/')); ?>/uploads/faq/<?php echo e($faq->banner); ?>" alt="PipDot Frequently Asked Questions" data-uk-img>
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <div class="uk-width-3-4@m">
                    <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-body">
                           
                            <h2 class="uk-margin-top uk-margin-medium-bottom"><?php echo e($faq->title); ?></h2>
                            <?php echo html_entity_decode($faq->content, ENT_QUOTES, 'UTF-8'); ?>

                            </div>
                        <div class="uk-card-footer uk-clearfix">
                            <?php $Category = DB::table('categories')->where('id',$faq->category)->get() ?>
                            <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href="<?php echo e(url('/')); ?>/articles/category/<?php echo e($Category->slung); ?>" class="uk-link-muted"><?php echo e($Category->title); ?></a>, &nbsp;<a href="<?php echo e(url('/')); ?>" class="uk-link-muted">Pipdot FX Consultants</a>, &nbsp;<a href="<?php echo e(url('/')); ?>/articles" class="uk-link-muted">News</a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="uk-float-right in-article-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url('/')); ?>/frequently-asked-questions/<?php echo e($faq->slung); ?>" data-uk-tooltip="Share with Facebook" class="uk-label uk-border-pill in-brand-facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                                <a href="https://twitter.com/share?text=<?php echo e($faq->title); ?>&url=<?php echo e(url('/')); ?>/frequently-asked-questions/<?php echo e($faq->slung); ?>&hashtags=<?php echo e($Settings->sitename); ?>,<?php echo e($Category->title); ?>" data-uk-tooltip="Share with Twitter" class="uk-label uk-border-pill in-brand-twitter"><i class="fab fa-twitter fa-sm"></i></a>
                                
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
  
</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/faq_single.blade.php ENDPATH**/ ?>