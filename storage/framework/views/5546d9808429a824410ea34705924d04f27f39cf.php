
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><footer class="sticky-footer">
    <section class="section-padding footer-list">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-3">
                <div class="footer-logo mb-4"><a class="logo" href="<?php echo e(url('/')); ?>/apps/home"><img alt="" src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" class="img-fluid"></a></div>
                <p><?php echo e($Settings->location); ?> <?php echo e($Settings->address); ?></p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-mobile fa-fw"></i> <?php echo e($Settings->mobile_one); ?></a></p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-envelope fa-fw"></i> <?php echo e($Settings->email); ?> </a></p>
                <p class="mb-0"><a href="#" class="text-dark"><i class="fas fa-globe fa-fw"></i> <?php echo e($Settings->url); ?></a></p>
             </div>
             <div class="col-lg-4 col-md-2">
                <h6 class="mb-4">Company</h6>
                <ul>
                   <li><a href="<?php echo e(url('/')); ?>/about-us">About us</a></li>
                   <li><a href="<?php echo e(url('/')); ?>/frequently-asked-questions">FAQ</a></li>
                   <li><a href="<?php echo e(url('/')); ?>/privacy-policy">Privacy</a></li>
                   <li><a href="<?php echo e(url('/')); ?>/terms-and-conditions">Terms</a></li>
                   <li><a href="<?php echo e(url('/')); ?>/contact-us">Contact us</a></li>
                </ul>
             </div>
        
             
             <div class="col-lg-4 col-md-3">
                <h6 class="mb-4">NEWSLETTER</h6>
                <div class="input-group">
                   <input type="text" class="form-control" placeholder="Email Address...">
                   <div class="input-group-append">
                      <button class="btn btn-primary" type="button"><i class="fas fa-arrow-right"></i></button>
                   </div>
                </div>
                <small> Subscribe to get our latest updates </small>
                
                
             </div>
          </div>
       </div>
    </section>
 </footer>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/footer.blade.php ENDPATH**/ ?>