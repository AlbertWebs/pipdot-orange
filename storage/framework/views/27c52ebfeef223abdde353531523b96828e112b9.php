<?php $__env->startSection('content'); ?>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <center>
                    <?php if(Session::has('message')): ?>
                                  <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                   <?php endif; ?>
                </center>
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>/admin/home/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Dashboard</a>
                    </li>
                    <li class="page-back"><a href="<?php echo e(url('/')); ?>/admin/SiteSettings"><i class="fa fa-forward" aria-hidden="true"></i>Go To Site Settings</a>
                    </li>
                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->
            <?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--== DASHBOARD INFO ==-->
            <div class="sb2-2-3">
                <div class="row">
                 
                    <!--== Country Campaigns ==-->
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4> Activity Logs</h4>
                                <p>Registers All important activities by all users</p>
                                <a class='dropdown-button drop-down-meta' href='#' data-activates='dropdown2'><i class="material-icons">more_vert</i></a>
                                 <!-- Dropdown Structure -->
                                 <ul id='dropdown1' class='dropdown-content'>
                                    <li><a href="<?php echo e(url('/')); ?>/admin/activitylogs">All Activity</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User</th>
                                                <th>Descriptions</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ActivityLog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><span class="txt-dark weight-500"><?php echo e($item->id); ?></span>
                                                </td>
                                                <td>
                                                    <?php
                                                       $UserName = DB::table('users')->where('id',$item->causer_id)->get();
                                                       
                                                    ?> <?php $__currentLoopData = $UserName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TheName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($TheName->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td><span class="txt-success"><i class="fa fa-check" aria-hidden="true"></i><?php echo e($item->description); ?></span>
                                                </td>
                                                <td>
                                                    <span style="font-weight: 600;" class="txt-dark weight-500"><?php echo e($item->created_at); ?></span>
                                                </td>
                                         
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>

            <div class="sb2-2-3">
                <!--== User Details ==-->
                <?php  $Users = DB::table('users')->get() ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>System Users</h4>
                                <p>Registered Users</p>
                                <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                <ul id="dr-users" class="dropdown-content">
                                    <li><a href="<?php echo e(url('/')); ?>/admin/addUser">Add New User</a>
                                    </li>
                                
                                    <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                    </li>
                                </ul>
                                <!-- Dropdown Structure -->

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Name</th>
                                                <th>Contacts</th>
                                            
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                            <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><span class="list-img"><img src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>"></span>
                                                </td>
                                                <td><a href="<?php echo e(url('/')); ?>/editUser/<?php echo e($item->id); ?>"><span class="list-enq-name"><?php echo e($item->name); ?></span><span class="list-enq-city"><?php if($item->is_admin == 1): ?> Administrator <?php else: ?> Normal User <?php endif; ?></span></a>
                                                </td>
                                                <td><?php echo e($item->mobile); ?><br><?php echo e($item->email); ?><br><?php echo e($item->address); ?><br><?php echo e($item->country); ?></td>
                                                
                                                <td><?php echo e($item->country); ?></td>
                                                <?php if($item->status == 1): ?>
                                                <td>
                                                    <span class="label label-success">Active</span>
                                                    <br><hr>

                                                    <a title="Switch To Inactive" href="<?php echo e(url('/')); ?>/admin/switchStatus/<?php echo e($item->id); ?>" class="sb2-2-1-edit text-center"><i class="fa fa-exchange" aria-hidden="true"></i><span>Switch To Inactive</span></a>
                                                
                                                </td>
                                                <?php else: ?>
                                                <td>
                                                    <span class="label label-danger">Inactive</span><br><hr>

                                                    <a title="Switch To Active" href="<?php echo e(url('/')); ?>/admin/switchStatus/<?php echo e($item->id); ?>" class="sb2-2-1-edit text-center"><i class="fa fa-exchange" aria-hidden="true"></i><span>Switch To Active</span></a>
                                                
                                                </td>
                                                <?php endif; ?>
                                            
                                            
                                                <td><a onclick="archiveFunction<?php echo e($item->id); ?>()" href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <script>
                                                function archiveFunction<?php echo e($item->id); ?>()
                                                    {
                                                        event.preventDefault(); // prevent form submit
                                                        swal({
                                                            title: "Are you sure you want to delete this user?",
                                                            text: "Once deleted, you will not be able to recover this data!",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                            })
                                                            .then((willDelete) => {
                                                            if (willDelete) {
                                                                //do the ajax stuff.
                                                                $.ajax({
                                                                    url: "<?php echo e(url('/')); ?>/admin/deleteUserAjax",
                                                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                    type: "POST",
                                                                    data: {id: <?php echo e($item->id); ?>},
                                                                    dataType: "html",
                                                                    success: function () 
                                                                    {
                                                                        swal("Done!","It was succesfully deleted!","success");
                                                                        setTimeout(function() {
                                                                            window.location.reload();
                                                                        }, 3000);
                    
                                                                    }
                                                                });
                                                                // 
                                                            
                                                            } else {
                                                                swal("Your imaginary file is safe!");
                                                            }
                                                        });
                                                    }
                                            </script>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

       
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Our Location On Google Map</h4>
                            </div>
                            <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi tab-map">
                                    <iframe src="<?php echo e($Set->map); ?>"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/admin/index.blade.php ENDPATH**/ ?>