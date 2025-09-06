<?php $__env->startSection('content'); ?>
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
  
       
       <div class="video-block section-padding">
          <div class="row">
             <div class="col-md-12">
                <div class="main-title">
                   <h6>Bonus Videos</h6>
                </div>
             </div>
             <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
             <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                   <div class="video-card-image">
                      <a data-toggle="modal" class="play-icon" href="#myModal_<?php echo e($Topic->slung); ?>"><i class="fas fa-play-circle"></i></a>
                      <a href="#"><img class="img-fluid" src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($Topic->placeholder); ?>" alt=""></a>
                      <div class="time"><?php echo e($Topic->video_duration); ?></div>
                   </div>
                   <div class="video-card-body">
                      <div class="video-title">
                        <a href="<?php echo e(url('/')); ?>/apps/player/<?php echo e($Topic->video_encryption); ?>"><?php echo e($Topic->title); ?></a>
                      </div>
                      <div class="video-page text-success">
                         <?php $Course = DB::table('courses')->where('id',$Topic->course_id)->get(); ?><?php $__currentLoopData = $Course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($Course->title); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                      </div>
                      <div class="video-view">
                        <?php echo e($Topic->video_views); ?> views &nbsp; &nbsp;  | &nbsp; &nbsp;<i class="fas fa-calendar-alt"></i> <?php echo timeAgo($Topic->created_at) ?>
                      </div>
                   </div>
                </div>
             </div>
             
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
       </div>
       <hr class="mt-0">
     
    </div>
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
 
 <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
  
   <script>
      $(document).ready(function(){
          /* Get iframe src attribute value i.e. YouTube video url
          and store it in a variable */
          var url = $("#cartoonVideo").attr('src');
          
          /* Assign empty url value to the iframe src attribute when
          modal hide, which stop the video playing */
          $("#myModal_<?php echo e($Topic->slung); ?>").on('hide.bs.modal', function(){
              $("#cartoonVideo").attr('src', '');
          });
          
          /* Assign the initially stored url back to the iframe src
          attribute when modal is displayed again */
          $("#myModal_<?php echo e($Topic->slung); ?>").on('show.bs.modal', function(){
              $("#cartoonVideo").attr('src', url);
          });
      });
      </script>
   
   <!-- Modal HTML -->
   <div id="myModal_<?php echo e($Topic->slung); ?>" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title"><?php echo e($Topic->title); ?></h5>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                 <div class="embed-responsive embed-responsive-16by9">
                   <iframe id="cartoonVideo" class="embed-responsive-item" width="660" height="415" src="//www.youtube.com/embed/<?php echo e($Topic->video); ?>" allowfullscreen></iframe>
                 </div>
               </div>
           </div>
       </div>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/bonus_videos.blade.php ENDPATH**/ ?>