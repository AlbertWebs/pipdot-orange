<?php $__env->startSection('content'); ?>
<?php $Topics = DB::table('topics')->get(); $page_active = 'home'; ?>
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
       <div class="top-category section-padding mb-4">
          <div class="row">
             
             <div class="col-md-12">
                <div class="owl-carousel owl-carousel-category">
                   <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($item->placeholder); ?>" alt="">
                           <h6><?php echo e($item->title); ?></h6>
                           <p><?php echo e($item->video_views); ?> views</p>
                        </a>
                     </div>
                  </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
             </div>
          </div>
       </div>
       <hr class="mt-0">
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
       <?php 
           $STK = DB::table('lnmo_api_response')->where('user_id',Auth::user()->id)->get(); 
           $Paypal = DB::table('lnmo_api_response')->where('user_id',Auth::user()->id)->get(); 
           $C2B = DB::table('mobile_payments')->where('user_id',Auth::user()->id)->get();
        ?>
       
     

       <?php if($C2B->isEmpty()): ?>

       <?php else: ?>
       
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               
               <h6>Transactions(M-PESA)</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Transactions Info</th>
                   <th scope="col">Date and Time</th>
                   <th scope="col">Status</th>
                 </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $C2B; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <th scope="row"><?php echo e($item->transLoID); ?></th>
                     <td>
                        Amount: <?php echo e($item->TransAmount); ?><br>
                        TransID: <?php echo e($item->TransID); ?><br>
                     </td>
                     <td>
                        <?php 
                        $RawDate = $item->created_at;
                        $FormatDate = strtotime($RawDate);
                        $Month = date('M',$FormatDate);
                        $Date = date('D',$FormatDate);
                        $date = date('d',$FormatDate);
                        $Year = date('Y',$FormatDate);
                        $Hour = date('H',$FormatDate);
                        $Min = date('i',$FormatDate);
                     ?>
                     <?php echo e($Month); ?> <?php echo e($date); ?>, <?php echo e($Year); ?> | <?php echo e($Hour); ?>:<?php echo e($Min); ?>

                     </td>
                     <td>
                        <?php if($item->status == 1): ?>
                        <button type="button" class="btn btn-success">Approved</button>
                        <?php else: ?> 
                        <button type="button" class="btn btn-primary">Pending</button>
                        <?php endif; ?>
                     </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       <?php endif; ?>

       

       <?php if($STK->isEmpty()): ?>

       <?php else: ?>
       
       <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               
               <h6>Transactions(M-PESA STK)</h6>
            </div>
            <table class="table">
               <thead style="background-color:#002e44 !important; color:#ffffff;">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Transactions Info</th>
                   <th scope="col">Date and Time</th>
                   <th scope="col">Status</th>
                 </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $STK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <th scope="row"><?php echo e($item->lnmoID); ?></th>
                     <td>
                        Amount: <?php echo e($item->Amount); ?><br>
                        MpesaReceiptNumber: <?php echo e($item->MpesaReceiptNumber); ?><br>
                     </td>
                     <td>
                        <?php 
                        $RawDate = $item->updateTime;
                        $FormatDate = strtotime($RawDate);
                        $Month = date('M',$FormatDate);
                        $Date = date('D',$FormatDate);
                        $date = date('d',$FormatDate);
                        $Year = date('Y',$FormatDate);
                        $Hour = date('H',$FormatDate);
                        $Min = date('i',$FormatDate);
                     ?>
                     <?php echo e($Month); ?> <?php echo e($date); ?>, <?php echo e($Year); ?> | <?php echo e($Hour); ?>:<?php echo e($Min); ?>

                     </td>
                     <td>
                        <?php if($item->status == 1): ?>
                        <button type="button" class="btn btn-success">Approved</button>
                        <?php else: ?> 
                        <button type="button" class="btn btn-primary">Pending</button>
                        <?php endif; ?>
                     </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
             </table>
            
         </div>
       </div>
       <hr class="mt-0">
       <?php endif; ?>

       

    </div>
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/index.blade.php ENDPATH**/ ?>