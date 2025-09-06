 <!-- section content begin -->
 <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-13">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-5-6@m uk-text-center in-margin-top-20@s">
                <p class="uk-text-lead uk-margin-remove-bottom">Learn How To Trade with Confidence</p>
                <h2 class="uk-margin-small-top">Complete package for every trader</h2>
            </div>
        </div>
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
            <?php $Courses = DB::table('courses')->get(); ?>
            <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="in-pricing-1" >
                    <div class="uk-card uk-card-default" style="min-height:595px !important;">
                        <div class="uk-card-header" style="padding:10px !important;">
                            <h3 class="uk-margin-remove-bottom"><?php echo html_entity_decode($courses->title, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="uk-text-muted uk-margin-remove-top uk-margin-remove-bottom"><?php echo html_entity_decode($courses->meta, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <div class="uk-card-body uk-background-contain uk-background-bottom-right  uk-margin-remove-top" style="background-image:url('<?php echo e(url('/')); ?>/uploads/courses/<?php echo e($courses->icon); ?>'); background-position:right bottom;" data-src="" data-uk-img style="padding:10px !important;">
                            <ul class="uk-list uk-list-bullet uk-margin-bottom" style="margin-bottom:100px !important; padding-top:-200px !important;">
                                <?php echo html_entity_decode($courses->content, ENT_QUOTES, 'UTF-8'); ?>

                            </ul>
                            <a href="<?php echo e(url('/')); ?>/forex-courses/<?php echo e($courses->slung); ?>" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top fix-bottom">Register This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                    <div class="uk-width-5-6@m">
                        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-drafting-compass fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Perfect Entry Strategies</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-book fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Stay-Trail Your Trades Strategies</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-margin-small-right">
                                    <i class="fas fa-check fa-2x in-icon-wrap small transparent"></i>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Low Risk Scalping Strategies</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- section content end --><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/courses.blade.php ENDPATH**/ ?>