<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="content-wrapper">
    <div class="container-fluid pb-0">
        <div class="video-block-right-list section-padding">
           <div class="row mb-4">
              <div class="col-md-8">
                 <div class="single-video">
                  <video loop="true" oncontextmenu="return false;" width="100%" height="320" controls controlsList="nodownload"> 
                        <source src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($topics->video); ?>" type="video/mp4"> 
                  </video> 
                    
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="video-slider-right-list">
                    <?php $OtherTopics = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->where('course_id',$topics->course_id)->get(); ?>
                    <?php $__currentLoopData = $OtherTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="video-card video-card-list <?php if($item->id == $topics->id): ?> active <?php endif; ?>">
                        <div class="video-card-image">
                           <a class="play-icon" href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($item->video_encryption); ?>"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($item->placeholder); ?>" alt=""></a>
                           <div class="time"><?php echo e($item->video_duration); ?></div>
                        </div>
                        <div class="video-card-body">
                           <div class="btn-group float-right right-action">
                              <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                              </div>
                           </div>
                           <div class="video-title">
                              <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($item->video_encryption); ?>"><?php echo e($item->title); ?></a>
                           </div>
                           <div class="video-page text-success">
                              Education <a title="" data-placement="top" data-toggle="tooltip" href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($item->video_encryption); ?>" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                            <?php echo e($item->video_views); ?> views &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($item->created_at) ?>
                           </div>
                        </div>
                     </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
           </div>
        </div>
        <div class="video-block section-padding">
           <div class="row">
              <div class="col-md-8">
                 <div class="single-video-left">
                    <div class="single-video-title box mb-3">
                       <h2><a href="#"><?php echo e($topics->title); ?></a></h2>
                       <p class="mb-0"><i class="fas fa-eye"></i> <?php echo e($topics->video_views); ?> views</p>
                    </div>
                    <div class="box mb-3 single-video-comment-tabs">
                       
                       <?php $Threads = DB::table('threads')->where('topic_id',$topics->id)->get(); ?>
                       <div class="tab-content">
                          <div class="tab-pane fade" id="disqus-comments" role="tabpanel" aria-labelledby="disqus-comments-tab">
                            <div class="reviews-members pt-0">
                                <div class="media">
                                   <a href="#"><img class="mr-3" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e(Auth::user()->image); ?>" alt="<?php echo e(Auth::user()->name); ?>"></a>
                                 
                                   <div class="media-body">
                                      <div class="form-members-body">
                                         <form id="post-comment">
                                         <?php echo csrf_field(); ?>
                                         <textarea rows="2" name="comment" placeholder="Add a public comment..." class="form-control"></textarea>
                                         <input name="topic_id" value="<?php echo e($topics->id); ?>" type="hidden">
                                      </div>
                                      <div class="form-members-footer text-right mt-2">
                                         <b class="float-left"><?php echo count($Threads) ?> Comments
                                         </b>
                                         <button class="btn btn-outline-danger btn-sm" type="button">CANCEL</button> 
                                         <button class="btn btn-danger btn-sm" type="submit">COMMENT</button>
                                       </form>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <center><img class="spinner" width="32" src="<?php echo e(asset('theme/img/ZZ5H.gif')); ?>" alt=""></center>
                             <?php $__currentLoopData = $Threads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             
                                         <?php $ReactionAll = App\Models\Reaction::where('threat_id',$thread->id)->get(); ?>
                                         <?php $__currentLoopData = $ReactionAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <?php $UserAll = App\Models\User::find($all->user_id) ?>
                                         <a href="#" title="<?php echo e($UserAll->name); ?>" data-placement="top" data-toggle="tooltip"><img class="total-like-user" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e($UserAll->image); ?>" alt="Generic placeholder image"></a>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div> --}}
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                          
                          
                          <div class="tab-pane fade show active" id="retro-comments" role="tabpanel" aria-labelledby="retro-comments-tab">
                            <div class="single-video-info-content box mb-3">
                                <h6>Meta :</h6>
                                <p><?php echo e($topics->meta); ?></p>
                                <h6>Overview :</h6>
                                <p><?php echo html_entity_decode($topics->content, ENT_QUOTES, 'UTF-8'); ?> </p>
                               <h6>Article Tags :</h6>
                               <p class="tags mb-0">
                                  <?php $Category = DB::table('categories')->limit(6)->inRandomOrder()->get(); ?>
                                  <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <span><a target="blank" href="<?php echo e(url('/')); ?>/articles/category/<?php echo e($Category->slung); ?>"><?php echo e($Category->title); ?>(<?php echo count($Blogs = DB::table('blogs')->where('category',$Category->id)->get()) ?>)</a></span> 
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </p>
                            </div>
                          
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="single-video-right">
                    <div class="row">
                       <div class="col-md-12">
                          <div class="adblock">
                             <div class="img">
                                <br>
                             </div>
                          </div>
                          <div class="main-title">
                             <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                   <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                             </div>
                             <h6>Random Videos</h6>
                          </div>
                       </div>
                       <div class="col-md-12">
                          <?php $RandomVideos = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->limit(10)->InRandomOrder()->get(); ?>
                          <?php $__currentLoopData = $RandomVideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RandVids): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="video-card video-card-list">
                             <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($RandVids->video_encryption); ?>"><img class="img-fluid" src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($RandVids->placeholder); ?>" alt=""></a>
                                <div class="time"><?php echo e($RandVids->video_duration); ?></div>
                             </div>
                             <div class="video-card-body">
                                <div class="btn-group float-right right-action">
                                   <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                      <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                   </div>
                                </div>
                                <div class="video-title">
                                   <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($RandVids->video_encryption); ?>"><?php echo e($RandVids->title); ?></a>
                                </div>
                                <div class="video-page text-success">
                                   <?php echo e($Settings->sitename); ?> <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                   <?php echo e($RandVids->video_views); ?> views &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($RandVids->created_at) ?>
                                </div>
                             </div>
                          </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/player.blade.php ENDPATH**/ ?>