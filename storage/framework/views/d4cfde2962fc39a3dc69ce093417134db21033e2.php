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
       
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               <h6>Forex Courses</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Title</th>
                   <th scope="col">Description</th>
                   <th scope="col">Videos</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php $AllCourses = DB::table('courses')->get(); ?>
                 <?php $__currentLoopData = $AllCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                  <th scope="row"><?php echo e($item->id); ?></th>
                  <td><?php echo e($item->title); ?></td>
                  <td><?php echo html_entity_decode($item->content, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td>
                     <?php $Topics = DB::table('topics')->where('course_id',$item->id)->get(); echo count($Topics); ?> Videos
                  </td>
                  <td>
                     <?php if($item->id == 1): ?>
                        <?php if($item->id == Auth::user()->course_registered_id): ?>
                        <a  style="color:#ffffff" href="<?php echo e(url('/')); ?>/apps/my-course" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                        <?php else: ?>
                        <a style="color:#ffffff" href="<?php echo e(url('/')); ?>/secured-payments/<?php echo e($item->id); ?>" class="btn btn-primary">Register Now</a>
                        <?php endif; ?>
                     <?php else: ?> 
                        <?php if($item->id == Auth::user()->course_2_registered_id): ?>
                        <a  style="color:#ffffff" href="<?php echo e(url('/')); ?>/apps/my-course" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                        <?php else: ?>
                        <a style="color:#ffffff" href="<?php echo e(url('/')); ?>/secured-payments/<?php echo e($item->id); ?>" class="btn btn-primary">Register Now</a>
                        <?php endif; ?>
                     <?php endif; ?>
                  </td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       


    </div>
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/allCourses.blade.php ENDPATH**/ ?>