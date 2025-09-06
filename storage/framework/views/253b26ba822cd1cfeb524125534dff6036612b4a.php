<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="content-wrapper">
    <div class="container-fluid pb-0">
       <div class="top-mobile-search">
          <div class="row">
             <div class="col-md-12">
                <form class="mobile-search">
                   <div class="input-group">
                      <input type="text" placeholder="Search for..." class="form-control">
                      <div class="input-group-append">
                         <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
       
       <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php $Topics = DB::table('topics')->where('course_id',$Courses->id)->get(); ?>
       <div class="video-block section-padding">
          <div class="row">
             <div class="col-md-12">
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
                   <h3><?php echo e($Courses->title); ?></h3>
                   <hr class="mt-0">
                </div>
             </div>
             <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                   <div class="video-card-image">
                      <a class="play-icon" href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($Topics->video_encryption); ?>"><i class="fas fa-play-circle"></i></a>
                      <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($Topics->video_encryption); ?>"><img class="img-fluid" src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($Topics->placeholder); ?>" alt=""></a>
                      <div class="time"><?php echo e($Topics->video_duration); ?></div>
                   </div>
                   <div class="video-card-body">
                      <div class="video-title">
                         <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($Topics->video_encryption); ?>"><?php echo e($Topics->title); ?></a>
                      </div>
                      <div class="video-page text-success">
                         <?php echo e($Settings->sitename); ?> <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>

                      <div class="video-view">
                         <?php echo e($Topics->video_views); ?> views &nbsp;<i class="fas fa-calendar-alt"></i> <span class="pull-right"><?php echo timeAgo($Topics->created_at) ?></span>
                      </div>
                   </div>
                </div>
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
       </div>
       <hr class="mt-0">
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    </div>
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/course_videos.blade.php ENDPATH**/ ?>