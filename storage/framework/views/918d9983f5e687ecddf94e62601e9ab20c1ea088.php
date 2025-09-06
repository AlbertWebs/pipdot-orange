<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SiteSettings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="<?php echo e(url('/')); ?>/uploads/users/<?php echo e(Auth::user()->image); ?>" alt="">
            </li>
            <li>
                <h5><?php echo e(Auth::user()->name); ?><span><?php echo e($SiteSettings->location); ?></span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="<?php echo e(url('/')); ?>/admin/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a target="_blank" href="<?php echo e(url('/')); ?>/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit Website</a>
            </li>

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Home Page Slider  </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/sliders">All Sliders</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addSlider">Add Slider Content</a>
                        </li>
                    </ul>
                </div>
            </li>
            

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Banners </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/banners">All Banners</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-film" aria-hidden="true"></i> Homepage Videos </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/homevideos">Homepage Videos</a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Categories </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/categories">All Category </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addCategory">Add Category</a>
                        </li>
                    </ul>
                </div>
            </li>
            

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-comment" aria-hidden="true"></i> Testimonials </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/testimonials">All Testimonials </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addTestimonials">Add Testimonials</a>
                        </li>
                    </ul>
                </div>
            </li>
            

             
             <li><a href="<?php echo e(url('/')); ?>/admin/enroll-users" class="collapsible-header"><i class="fa fa-registered " aria-hidden="true"></i> Enroll Users </a>
                
            </li>
            

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Academia </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/courses">All Courses </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addCourse">Add Course </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/topics">All Topics </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addTopic">Add Topic </a>
                        </li>
                    </ul>
                </div>
            </li>
            

                     
                     <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Signals </a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>/admin/signals">All Signals </a>
                                </li>
                                <li><a href="<?php echo e(url('/')); ?>/admin/addSignal">Add Signal </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
            

            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Payments</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="javascript:void(0)" class="collapsible-header"><i class="fa fa-money" aria-hidden="true"></i>M-PESA API</a>
                            <div class="left-sub-menu">
                                <ul>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/b2b">B2B Transfers</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/b2c">B2C Transfers</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/lnmo_api_response">STK Transactions</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/mobile_payments">C2B Transactions</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/reverse_transaction">Reversed Transcations</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/transaction_status">Transaction Statuses</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="<?php echo e(url('/')); ?>/admin/accountbalance">Account Balance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="<?php echo e(url('/')); ?>" class="collapsible-header"><i class="fa fa-paypal" aria-hidden="true"></i>Paypal Payments</a>
                            <div class="left-sub-menu">
                            
                            </div>
                        </li>

                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="<?php echo e(url('/')); ?>" class="collapsible-header"><i class="fa fa-btc" aria-hidden="true"></i>Crypto Payments</a>
                            <div class="left-sub-menu">
                            
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>System Users</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/users">Manage Users</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addUser">Add User</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/admins">Manage Admins</a>
                        </li>
                  
                    </ul>
                </div>
            </li>
            
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-info" aria-hidden="true"></i>Information Center</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/faq">Frequently Asked Questions</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/how">How It Works</a>
                        </li>
                       
                  
                    </ul>
                </div>
            </li>
            

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-gavel" aria-hidden="true"></i>Legal Pages</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/editRisk">Risk Declaration</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/privacy">Privacy Policy</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/terms">Terms and Conditions</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/editCopyright"> Copyright Statement</a>
                        </li>
                  
                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/blog">All Blogs</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/comments">Comments</a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/addBlog">Add Blog</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="<?php echo e(url('/')); ?>/admin/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>/admin/SiteSettings">Systems Settings </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/mailerSettings">Mailer Settings </a>
                        </li>
                        <li><a href="<?php echo e(url('/')); ?>/admin/credentials">Systems Credentials </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="<?php echo e(url('/')); ?>/admin/SocialMediaSettings"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
            </li>
            <li><a href="<?php echo e(url('/')); ?>/logout" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
            </li>

        
       
        </ul>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pipdotfx.com/public_html/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>