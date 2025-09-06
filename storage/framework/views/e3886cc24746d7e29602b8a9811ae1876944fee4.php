<div class="uk-section uk-section-secondary uk-padding-large in-padding-large-vertical@s uk-background-contain uk-background-bottom-center in-profit-11" data-src="img/in-section-profit-11.png" data-uk-img="">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-5-6@m">
                <div class="uk-grid" data-uk-grid="">
                    <div class="uk-width-1-2@m uk-first-column">
                        <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill uk-margin-small-bottom">Be Part of PIPDOT FX</span>
                        <h2 class="uk-margin-small-top">JOIN PIPDOT FX TODAY</h2>
                        <p><i class="fas fa-check"></i> &nbsp; Yes, you can learn to trade with confidence.</p>
                        <p><i class="fas fa-check"></i> &nbsp; Yes, you can learn to identify profitable opportunities on your own.</p>
                        <p><i class="fas fa-check"></i> &nbsp; Yes, you can use the forex market to enjoy come extra
                            income.</p>
                        <h5>Join Now and see why people around the world are using PIPDOT FX Strategies to trade successfully and live a life they love!</h5>
                    
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-card uk-card-primary uk-border-rounded ">
                            <div class="uk-card-body">
                               
                                <form class="uk-grid-small uk-grid uk-grid-stack" data-uk-grid="" method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="uk-width-1-1 uk-first-column">
                                        <input class="uk-input uk-border-rounded" type="text" name="name" placeholder="Full name" required>
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <input onblur="duplicateEmail(this)" autocomplete="off" class="uk-input uk-border-rounded" id="username" name="email" value="<?php echo e(old('email')); ?>" required type="text" placeholder="email">
                                    </div>
                                    <small id="emailChecker" class="uk-alert-danger" uk-alert>This Email Has Been Used By Another User</small>
                                    <div class="uk-column-1-2 uk-grid-margin uk-first-column">
                                        <div>
                                            <input class="uk-input uk-border-rounded" name="password" type="password" placeholder="Password" required>
                                        </div>
                                        <div>
                                            <input class="uk-input uk-border-rounded" name="password_confirmation" type="password" placeholder="Password Confirm" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <button type="submit" class="uk-button uk-button-primary uk-border-rounded uk-width-expand uk-margin-small-bottom">Create Account</button>
                                    </div>
                                </form>
                                <div class="uk-margin-medium-bottom uk-text-center">
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="http://localhost:8000/apps/google"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="http://localhost:8000/apps/facebook"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/designekta-studios/projects/pipdotfx/resources/views/front/join.blade.php ENDPATH**/ ?>