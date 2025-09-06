<ul class="sidebar navbar-nav">
    <li class="nav-item <?php if($page_active == 'home'): ?> active <?php endif; ?>">
       <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/home">
       <i class="fas fa-fw fa-home"></i>
       <span>Home</span>
       </a>
    </li>

    <li class="nav-item <?php if($page_active == 'courses'): ?> active <?php endif; ?>">
      <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/allCourses">
      <i class="fas fa-fw fa-graduation-cap"></i>
      <span>All Courses</span>
      </a>
   </li>
    <li class="nav-item <?php if($page_active == 'courses'): ?> active <?php endif; ?>">
       <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/my-course">
       <i class="fas fa-fw fa-users"></i>
       <span>My Courses</span>
       </a>
    </li>
    
   <?php   $Courses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->limit(1)->get(); ?>
   <?php if($Courses->isEmpty()): ?>
   <li class="nav-item <?php if($page_active == 'courses'): ?> active <?php endif; ?>">
      <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/my-course">
      <i class="fas fa-fw fa-video"></i>
      <span> Course Videos </span>
      </a>
   </li>
   <?php else: ?>
    <li class="nav-item <?php if($page_active == 'courses'): ?> active <?php endif; ?>">
       <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/course-videos">
       <i class="fas fa-fw fa-video"></i>
       <span> Course Videos </span>
       </a>
    </li>
   <?php endif; ?>
    
    <li class="nav-item <?php if($page_active == 'bonus'): ?> active <?php endif; ?>">
       <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/bonus-videos">
       <i class="fas fa-fw fa-video"></i>
       <span>Bonus Videos</span>
       </a>
    </li>

    <li class="nav-item <?php if($page_active == 'admin'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/contact-admin">
        <i class="fas fa-fw fa-comment"></i>
        <span>Contact Admin</span>
        </a>
     </li>

    <li class="nav-item <?php if($page_active == 'profile'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/settings">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>My Profile </span>
        </a>
     </li>

     <li class="nav-item <?php if($page_active == 'security'): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(url('/')); ?>/apps/security-settings">
        <i class="fas fa-fw fa-lock"></i>
        <span>Security Settings </span>
        </a>
     </li>

    
    <li class="nav-item channel-sidebar-list">
       <h6>Extras</h6>
       <ul>
          <li>
             <a href="<?php echo e(url('/')); ?>">
             <img class="img-fluid" alt="" src="<?php echo e(asset('userdashboard/img/s2.png')); ?>"> Main Website 
             </a>
          </li>
          <li>
             <a title="Change Profile Picture" href="<?php echo e(url('/')); ?>/apps/uploads">
             <img class="img-fluid" alt="" src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e(Auth::user()->image); ?>"> Profile Picture <span class="badge badge-success"><i class="fas fa-fw fa-cloud-upload-alt"></i></span>
             </a>
          </li>
          <li>
             <a target="blank" href="<?php echo e(url('/')); ?>/forex-signals">
             <img class="img-fluid" alt="" src="<?php echo e(url('/')); ?>/uploads/banners/forex-signal-foreign-exchange-market-png-512x512px-forex-signal-forex-signal-png-800_800.jpg"> Signals
             </a>
          </li>
       </ul>
    </li>
 </ul><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/sidebar.blade.php ENDPATH**/ ?>