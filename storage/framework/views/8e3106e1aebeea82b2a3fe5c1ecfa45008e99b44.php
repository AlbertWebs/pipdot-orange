<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-grid-medium uk-child-width-1-2@m in-blog-1" data-uk-grid>
                        <?php $Count = 1 ?>
                        <?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Count == 1): ?>
                        <div class="uk-width-1-1">
                            <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                                <div class="uk-card-media-top">
                                    <img src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(url('/')); ?>/uploads/blogs/<?php echo e($item->image_one); ?>" alt="sample-image" data-uk-img>
                                </div>
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>"><?php echo e($item->title); ?></a>
                                    </h3>
                                    <p><?php echo e($item->meta); ?>

                                    </p>
                                    <div class="uk-flex uk-flex-middle">
                                        <?php $Author = DB::table('users')->where('name',$item->author)->get(); ?>
                                        <?php $__currentLoopData = $Author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="uk-margin-small-right">
                                            <img class="uk-border-pill uk-background-muted" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e($author->image); ?>" alt="<?php echo e($author->name); ?>" width="24" height="24">
                                        </div>
                                        
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                <a href="#"><?php echo e($author->name); ?></a>
                                                <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                
                                                <?php 
                                                    $RawDate = $item->created_at;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                ?>
                                                <?php echo e($Month); ?> <?php echo e($date); ?>, <?php echo e($Year); ?>

                                            </p>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="uk-card-footer uk-clearfix">
                                    <?php $Cat = DB::table('categories')->where('id',$item->category)->get(); ?>
                                    <?php $__currentLoopData = $Cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="uk-float-left">
                                        <a href="#"><span class="uk-label uk-label-success uk-border-pill"><?php echo e($cat->title); ?></span></a>
                                    </div>
                                    <div class="uk-float-right">
                                        <a href="<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>" class="uk-button uk-button-text">Read more</a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </article>
                        </div>
                        <?php else: ?>
                        <div>
                            <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                                <div class="uk-card-media-top">
                                    <img src="<?php echo e(asset('theme/img/in-lazy.svg')); ?>" data-src="<?php echo e(url('/')); ?>/uploads/blogs/<?php echo e($item->image_one); ?>" alt="sample-image" data-uk-img>
                                </div>
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>"><?php echo e($item->title); ?></a>
                                    </h3>
                                    <p><?php echo e($item->meta); ?>

                                    </p>
                                    <div class="uk-flex uk-flex-middle">
                                        <?php $Author = DB::table('users')->where('name',$item->author)->get(); ?>
                                        <?php $__currentLoopData = $Author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="uk-margin-small-right">
                                            <img class="uk-border-pill uk-background-muted" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e($author->image); ?>" alt="<?php echo e($author->name); ?>" width="24" height="24">
                                        </div>
                                        
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                                                <a href="#"><?php echo e($author->name); ?></a>
                                                <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                
                                                <?php 
                                                    $RawDate = $item->created_at;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                ?>
                                                <?php echo e($Month); ?> <?php echo e($date); ?>, <?php echo e($Year); ?>

                                            </p>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="uk-card-footer uk-clearfix">
                                    <?php $Cat = DB::table('categories')->where('id',$item->category)->get(); ?>
                                    <?php $__currentLoopData = $Cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="uk-float-left">
                                        <a href="#"><span class="uk-label uk-label-success uk-border-pill"><?php echo e($cat->title); ?></span></a>
                                    </div>
                                    <div class="uk-float-right">
                                        <a href="<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>" class="uk-button uk-button-text">Read more</a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </article>
                        </div>
                        <?php endif; ?>
                        <?php $Count = $Count+1 ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- module pagination begin -->
                    
                    <?php echo e($Blogs->links('vendor.pagination.default')); ?>

                    <!-- module pagination end -->
                </div>
                <?php echo $__env->make('blog.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta-studios/projects/pipdotfx/resources/views/blog/index.blade.php ENDPATH**/ ?>