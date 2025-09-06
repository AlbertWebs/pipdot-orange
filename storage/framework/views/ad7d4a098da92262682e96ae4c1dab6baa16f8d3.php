<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</header>

<main>
         <!-- section content begin -->
         <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-12">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
                    <div class="uk-width-1-1@m uk-text-center">
                        <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-card-body">
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-center">Currency Pair</th>
                                            <th class="uk-text-center">Date and Time</th>
                                            <th class="uk-text-center">Position</th>
                                            <th class="uk-text-center">TP</th>
                                            <th class="uk-text-center">SL</th>
                                            <th class="uk-text-center uk-visible@s">Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $Signal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Signal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(asset('theme/img/in-profit-fxeur.svg')); ?>" alt="fx-flag" width="29" height="17" data-uk-img><span class="in-pairname"><?php echo e($Signal->currency_pair); ?></span></td>
                                            <td>
                                                <span class="uk-label uk-label-success uk-border-pill">
                                                    <?php 
                                                    $RawDate = $Signal->datetime;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                    $Hour = date('H',$FormatDate);
                                                    $Minute = date('i',$FormatDate);
                                                    $Second = date('s',$FormatDate);
                                                ?>
                                                <?php echo e($Date); ?>, <?php echo e($date); ?> <?php echo e($Month); ?>, <?php echo e($Year); ?> | <?php echo e($Hour); ?> <?php echo e($Minute); ?> <?php echo e($Second); ?>

                                                </span>
                                            </td>
                                            <td class="uk-visible@s"><?php echo e($Signal->position); ?></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill"><?php echo e($Signal->tp); ?></span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill"><?php echo e($Signal->sl); ?></span></td>
                                            <td class="uk-visible@s"><?php echo e($Signal->comments); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a class="uk-text-uppercase uk-text-small" href="<?php echo e(url('/')); ?>/all-forex-signals">All Signals</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
</main>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/front/signals.blade.php ENDPATH**/ ?>