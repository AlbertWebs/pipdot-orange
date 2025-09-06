<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <!-- section content begin -->
    <div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-blog-1 in-article">
                <video oncontextmenu="return false;" width="100%" height="320" controls controlsList="nodownload"> 
                    <source src="<?php echo e(url('/')); ?>/uploads/blogs/<?php echo e($item->video); ?>" type="video/mp4"> 
                </video>
                <div class="uk-width-1-1 in-figure-available">
                    
                    
                  
                    
                </div>
                <div class="uk-width-3-4@m">
                    <article class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-body">
                            <div class="uk-flex uk-flex-middle uk-margin-remove-bottom">
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                          
                            <h2 class="uk-margin-top uk-margin-medium-bottom"><?php echo e($item->title); ?></h2>
                            <?php echo html_entity_decode($item->content, ENT_QUOTES, 'UTF-8'); ?>

                        </div>
                        <div class="uk-card-footer uk-clearfix">
                            <?php $Category = DB::table('categories')->where('id',$item->category)->get() ?>
                            <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="uk-float-left in-article-tags">
                                <i class="fas fa-tags"></i><span class="uk-margin-small-left uk-text-bold">Tags: &nbsp;</span>
                                <a href="<?php echo e(url('/')); ?>/articles/category/<?php echo e($Category->slung); ?>" class="uk-link-muted"><?php echo e($Category->title); ?></a>, &nbsp;<a href="<?php echo e(url('/')); ?>" class="uk-link-muted">Pipdot FX Consultants</a>, &nbsp;<a href="<?php echo e(url('/')); ?>/articles" class="uk-link-muted">News</a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="uk-float-right in-article-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>" data-uk-tooltip="Share with Facebook" class="uk-label uk-border-pill in-brand-facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                                <a href="https://twitter.com/share?text=<?php echo e($item->title); ?>&url=<?php echo e(url('/')); ?>/articles/<?php echo e($item->slung); ?>&hashtags=<?php echo e($Settings->sitename); ?>,<?php echo e($Category->title); ?>" data-uk-tooltip="Share with Twitter" class="uk-label uk-border-pill in-brand-twitter"><i class="fab fa-twitter fa-sm"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <?php if(Auth::user()): ?>
    <!-- section content begin -->
    <div class="uk-section uk-section-small in-offset-top-20">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <h2 class="uk-margin-small-bottom">Comments(<?php echo count( $Comments = DB::table('comments')->where('post_id',$item->id)->where('parent_id', '=', 0)->get()) ?>)</h2>
                    <ul class="uk-comment-list">
                        <?php $__currentLoopData = $Comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <article class="uk-comment uk-visible-toggle">
                                <div class="uk-grid uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <div class="uk-comment-header">
                                            <img class="uk-border-circle uk-background-muted uk-comment-avatar" src="<?php echo e(asset('theme/img/avatar.png')); ?>" width="70" height="70" alt="avatar">
                                        </div>
                                    </div>
                                    <?php $User = DB::table('users')->where('id',$items->user_id)->get() ?>
                                    <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="uk-width-expand">
                                        <div class="uk-comment-body uk-position-relative">
                                            <div class="uk-position-top-right uk-hidden-hover"><a id="reply-btn-<?php echo e($items->id); ?>" href="#"><i class="fas fa-reply fa-xs uk-margin-small-right"></i>Reply</a></div>
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo e($User->name); ?></a></h4>
                                                                  
                                            <?php 
                                                $RawDate = $items->created_at;
                                                $FormatDate = strtotime($RawDate);
                                                $Month = date('M',$FormatDate);
                                                $Date = date('D',$FormatDate);
                                                $date = date('d',$FormatDate);
                                                $Year = date('Y',$FormatDate);
                                            ?>
                                        
                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset uk-text-small" href="#"><i class="fas fa-clock fa-sm uk-margin-small-right"></i><?php echo e($Month); ?> <?php echo e($date); ?>, <?php echo e($Year); ?></a></p>
                                            <p><?php echo html_entity_decode($items->comment, ENT_QUOTES, 'UTF-8'); ?></p>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </article>
                            
                            <form action="<?php echo e(route('reply.add')); ?>" method="POST" class="uk-form uk-grid-small reply-form" id="reply-form-<?php echo e($items->id); ?>" data-uk-grid>
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="post_id" value="<?php echo e($item->id); ?>" />
                                
                                <input type="hidden" name="comment_id" value="<?php echo e($items->id); ?>" />
                                <div class="uk-width-1-1">
                                    <textarea required class="uk-textarea uk-border-rounded" id="message" name="comment" rows="6" placeholder="Comment"></textarea>
                                </div>
                                <div class="uk-width-1-1">
                                    <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Post Reply</button>
                                </div>
                            </form>
                            
                            <?php $Replies = DB::table('comments')->where('parent_id',$items->id)->get(); ?>
                            <?php if($Replies->isEmpty()): ?>

                            <?php else: ?>
                                <ul>
                                    <?php $__currentLoopData = $Replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $User = DB::table('users')->where('id',$Re->user_id)->get() ?>
                                    <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <article class="uk-comment uk-comment-primary uk-visible-toggle">
                                            <div class="uk-grid uk-grid-medium">
                                                <div class="uk-width-auto">
                                                    <div class="uk-comment-header">
                                                        <img class="uk-border-circle uk-background-muted uk-comment-avatar" src="<?php echo e(asset('theme/img/avatar.png')); ?>" width="70" height="70" alt="avatar">
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-comment-body uk-position-relative">
                                                        
                                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo e($User->name); ?></a></h4>
                                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset uk-text-small" href="#"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>April 27, 2020</a></p>
                                                        <p><?php echo html_entity_decode($Re->comment, ENT_QUOTES, 'UTF-8'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-offset-top-20">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <h2 class="uk-margin-bottom">Leave a comment</h2>
                    <form action="<?php echo e(route('comment.add')); ?>" method="POST" class="uk-form uk-grid-small" data-uk-grid>
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="post_id" value="<?php echo e($item->id); ?>" />
                        <div class="uk-width-1-2@s">
                            <input  class="uk-input uk-border-rounded" value="<?php echo e(Auth::user()->name); ?>" id="name" name="name" type="text" placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input readonly class="uk-input uk-border-rounded" value="<?php echo e(Auth::user()->email); ?>" id="email" name="email" type="email" placeholder="Email address">
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="comment" rows="6" placeholder="Comment"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Post comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <?php else: ?>

    <?php endif; ?>
</main>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.reply-form').hide();
    });
</script>

<?php $Comments = DB::table('comments')->where('post_id',$item->id)->where('parent_id', '=', 0)->get() ?>
<?php $__currentLoopData = $Comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script>
    $(document).ready(function() {
        $('#reply-btn-<?php echo e($Comments->id); ?>').click(function(event) {
            event.preventDefault();
            $('#reply-form-<?php echo e($Comments->id); ?>').fadeToggle("slow");
        });
    });
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/blog/blog.blade.php ENDPATH**/ ?>