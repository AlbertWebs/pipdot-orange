<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>
  
<main>
    
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-3@m">
                    <div class="uk-card uk-card-large uk-card-default in-card-paper">
                        <div class="uk-card-body">
                            <h2>Privacy Policies</h2>
                            <p>Pipdot FX Consultants values privacy of any person or organization, business in nature or otherwise. </p>
                            <p> We are therefore committed to protecting any personal information collected through the pipdotfx.com website Pipdot FX Consultants may from time to time change this information and will inform all interested parties of the changes.</p>
                            
                            <hr class="uk-margin-medium-top uk-margin-small-bottom">

                            <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                <?php $Count = 1; ?>
                                <?php $__currentLoopData = $Privacy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Privacy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($Count == 1): ?>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"><?php echo e($Privacy->title); ?></a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li><?php echo html_entity_decode($Privacy->content, ENT_QUOTES, 'UTF-8'); ?></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php else: ?>
                                <li>
                                    <a class="uk-accordion-title" href="#"><?php echo e($Privacy->title); ?></a>
                                    <div class="uk-accordion-content">
                                        <ul class="uk-list uk-list-bullet">
                                            <li><?php echo html_entity_decode($Privacy->content, ENT_QUOTES, 'UTF-8'); ?></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php $Count = $Count+1 ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-border-rounded uk-margin-medium-top">
                                <p class="uk-text-small">For general inquiries please contact <a class="uk-text-lowercase uk-link" href="mailto:"><?php echo e($Settings->email); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->



</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/privacies.blade.php ENDPATH**/ ?>