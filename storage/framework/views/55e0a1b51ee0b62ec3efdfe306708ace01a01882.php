<?php $__env->startSection('content'); ?>
<?php if(Session::has('course_id')): ?>
<div id="content-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mx-auto text-center  pt-4 pb-5">
            
            <div class="col-md-12">
               <?php $CourseID = Session::get('course_id'); $AllCourses = DB::table('courses')->where('id',$CourseID)->get(); ?>
               <?php $__currentLoopData = $AllCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <h1><img style="max-width:500px" alt="404" src="<?php echo e(url('/')); ?>/uploads/courses/<?php echo e($item->image); ?>" class="img-fluid"></h1>
               <h1><?php echo e($item->title); ?></h1>
               <p class="land"><?php echo e($item->meta); ?></p>
               <div class="mt-5">
                  <a class="btn btn-primary" href="<?php echo e(url('/')); ?>/secured-payments/<?php echo e($item->id); ?>"><i class="mdi mdi-home"></i> Register Now </a>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
            
         </div>
      </div>
   </div>
 
</div>
<?php else: ?> 



<div id="content-wrapper">
   <div class="container-fluid">
      
      <?php if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == 2): ?>
      <?php $AllCourses = DB::table('courses')->get(); ?>

      <?php elseif(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == null): ?>)
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->get(); ?>


      <?php elseif(Auth::user()->course_registered_id == null && Auth::user()->course_2_registered_id == 2): ?>
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_2_registered_id)->get(); ?>

      <?php else: ?> 
      <?php $AllCourses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->get(); ?>

      <?php endif; ?>
      <?php if($AllCourses->isEmpty()): ?>
      

      <div class="row">
         <div class="col-md-12 mx-auto text-center  pt-4 pb-5">
            <h1><img style="max-width:500px" alt="404" src="<?php echo e(asset('userdashboard/img/404-pipdot.png')); ?>" class="img-fluid"></h1>
            <h1>No registered courses</h1>
            <p class="land">You are seeing this page because you have not registered for any courses</p>
            <div class="mt-5">
               <a class="btn btn-outline-primary" href="<?php echo e(url('/')); ?>/apps/allCourses"><i class="mdi mdi-home"></i> Register Course Now </a>
            </div>
         </div>
      </div>
      
      <?php else: ?>

      <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               <h6>Registered Courses</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Videos</th>
                  <th scope="col">Action</th>
               </tr>
               </thead>
               <tbody>
               
               <?php $__currentLoopData = $AllCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <th scope="row"><?php echo e($item->id); ?></th>
                  <td><?php echo e($item->title); ?></td>
                  <td>
                     <?php $Topics = DB::table('topics')->where('course_id',$item->id)->get(); echo count($Topics); ?> Videos
                  </td>
                  <td>
                     <a  style="color:#ffffff" href="<?php echo e(url('/')); ?>/apps/course-videos" class="btn btn-success"><i class="fa fa-clock"></i>&nbsp;Ongoing</a>
                  </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
         </div>
      </div>

      <?php endif; ?>


   </div>
  
</div>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/my_courses.blade.php ENDPATH**/ ?>