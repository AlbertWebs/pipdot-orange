<div class="ad-v2-hom-info">
    <div class="ad-v2-hom-info-inn">
        <ul>
            <li>
                <div class="ad-hom-box ad-hom-box-1">
                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                    <div class="ad-hom-view-com">
                    <a target="new" href="https://analytics.google.com/analytics/web/#/p273118204/reports/reportinghub>"><p><i class="fa  fa-arrow-up up"></i> Website Traffic</p></a>
                    <a target="new" href="https://analytics.google.com/analytics/web/#/p273118204/reports/reportinghub>"><h3>Click Here</h3></a>
                    </div>
                </div>
            </li>
            <li>
                <div class="ad-hom-box ad-hom-box-2">
                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Earnings</p>
                    <h3>KES
                        <?php
                             //STK
                             
                             $mobileSTK = \App\Models\STKMpesaTransaction::where('status','1')->sum('Amount');
                            //  Lipa na mpesa
                            $mobile = \App\Models\MpesaTransaction::where('status','1')->sum('TransAmount');
                            $sum = $mobileSTK+$mobile;
                            echo $sum
                        ?>
                    </h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="ad-hom-box ad-hom-box-3">
                    <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Users</p>
                    <?php $Users = App\Models\User::all() ?>
                    <h3><?php echo count($Users) ?></h3>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
</div><?php /**PATH /home/pipdotfx.com/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>