 <!-- section content begin -->
 <div class="uk-section uk-section-muted uk-padding-large in-padding-large-vertical@s in-profit-15">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
                <p class="uk-text-lead uk-margin-remove-bottom uk-text-center in-offset-top-10">Learn How to trade with <?php echo e($Settings->sitename); ?></p>
                <h2 class="uk-margin-small-top uk-text-center">How it works</h2>
                <div class="uk-grid-large uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <?php $Count = 1?>
                    <?php $__currentLoopData = $How; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $how): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <span class="in-icon-wrap circle large"><?php echo e($Count); ?></span>
                        <h4 class="uk-margin-top"><?php echo e($how->title); ?></h4>
                        <p><?php echo html_entity_decode($how->content, ENT_QUOTES, 'UTF-8'); ?> </p>
                    </div>
                    <?php $Count = $Count+1 ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end --><?php /**PATH /home/designekta-studios/projects/pipdotfx/resources/views/front/hows.blade.php ENDPATH**/ ?>