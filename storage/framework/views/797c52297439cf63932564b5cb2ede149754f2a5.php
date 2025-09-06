<?php $__env->startSection('content'); ?>
<div id="content-wrapper">
    
    <div class="container-fluid upload-details">
        <div class="row">
           <div class="col-lg-12">
              <div class="main-title">
                 <h6>My Settings</h6>
              </div>
           </div>
        </div>
        <form method="POST" action="<?php echo e(url('/')); ?>/app/updateSettings" id="updateSettings">
           <?php echo e(csrf_field()); ?>

           <div class="row">
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label">Full Name <span class="required">*</span></label>
                    <input class="form-control border-form-control" value="<?php echo e(Auth::user()->name); ?>" name="name" type="text">
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label">Email Address <span class="required">*</span></label>
                    <input class="form-control border-form-control" name='email' value="<?php echo e(Auth::user()->email); ?>" type="email">
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label">Phone <span class="required">*</span></label>
                    <input class="form-control border-form-control" placeholder="254723000000" name="mobile" value="<?php echo e(Auth::user()->mobile); ?>" type="text">
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label">Email Address <span class="required">*</span></label>
                    <input class="form-control border-form-control" name="address" value="<?php echo e(Auth::user()->address); ?>" type="text">
                 </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                     <label class="control-label"> Country <span class="required">*</span></label>
                     <input class="form-control border-form-control" name="country" value="<?php echo e(Auth::user()->country); ?>" type="text">
                  </div>
            </div>
           </div>
           
         
        
           <div class="row">
              <div class="col-sm-12 text-right">
                 <a href="<?php echo e(url('/')); ?>/apps/home" type="button" class="btn btn-danger border-none"> Cancel </a>
                 <button type="submit" class="btn btn-success border-none"> Save Changes </button> <img class="spinner" width="32" src="<?php echo e(asset('theme/img/ZZ5H.gif')); ?>" alt="">
                 <br><span class="alert-success messageBack"> </span>
              </div>
           </div>
        </form>
     </div>
    
    <?php echo $__env->make('students.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>

 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <script>
   $( document ).ready(function() {
     $('.spinner').hide();
   });

   $("#updateSettings").submit(function(stay){
      stay.preventDefault()
      var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
      $('.spinner').show();
      $.ajax({
         type: 'POST',
         url: "<?php echo e(url('/')); ?>/apps/updateSettings",
         data: formdata, // here $(this) refers to the ajax object not form
         success: function (data) {
            $('.spinner').hide();
            $('.messageBack').html('Changes Have Been Saved')
            setTimeout(function() {
               window.location.reload();
            }, 3000);
         },
      });
      stay.preventDefault(); 
   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/students/settings.blade.php ENDPATH**/ ?>