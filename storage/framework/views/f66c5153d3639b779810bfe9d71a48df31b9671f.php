<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($Settings->tawkToStatus == 0): ?>

    <?php else: ?> 
    <?php echo html_entity_decode($Settings->tawkTo, ENT_QUOTES, 'UTF-8'); ?>

    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/pipdotfx.com/public_html/resources/views/tawk.blade.php ENDPATH**/ ?>