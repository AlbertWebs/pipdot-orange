<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex" data-uk-grid>
                <div>
                    <h4 class="uk-heading-bullet">Articles</h4>
                    <ul class="uk-list uk-link-text">
                        <?php $Category = DB::table('categories')->limit(3)->get(); ?>
                        @foreach($Category as $Cat)
                        <li><a href="{{url('/')}}/articles/category/{{$Cat->slung}}">{{$Cat->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Company</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{url('/')}}/about-us">About Us</a></li>
                        <li><a href="{{url('/')}}/forex-courses">Forex Courses</a></li>
                        <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Legal</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{url('/')}}/terms-and-conditions">Terms &amp; Conditions</a></li>
                        <li><a href="{{url('/')}}/privacy-policy">Privacy &amp; Policy</a></li>
                        <li><a href="{{url('/')}}/copyright">Copyright</a></li>
                    </ul>
                </div>
                <div class="uk-visible@m">
                    <h4 class="uk-heading-bullet">Support</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{url('/')}}/how-it-works">How it Works</a></li>
                        <li><a href="{{url('/')}}/frequently-asked-questions">FAQ</a></li>
                        <li><a href="{{url('/')}}/articles">Our Blog</a></li>
                    </ul>
                </div>
                <div class="uk-flex-first uk-flex-last@m">
                    <h4 class="uk-heading-bullet">Contact Us</h4>
                    <ul class="uk-list uk-link-text">
                        <li><img class="uk-margin-small-bottom" src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}" data-src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}" alt="logo" width="230" height="36" data-uk-img></li>
                        <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>{{$Settings->email}}</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>{{$Settings->location}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="in-footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                        <p class="uk-text-small">{!! html_entity_decode($Settings->risks, ENT_QUOTES, 'UTF-8') !!} </p>
                    </div>
                </div>
                <div class="uk-width-1-2@m in-copyright-text">
                    <p>Copyright © <a href="{{url('/copyright')}}">{{$Settings->sitename}}</a> <?php echo date('Y') ?> All rights reserved.</p>
                </div>
                <div class="uk-width-1-2@m uk-text-right@m in-footer-socials">
                    <a href="{{$Settings->linkedin}}"><i class="fab fa-linkedin"></i></a>
                    <a href="{{$Settings->youtube}}"><i class="fab fa-youtube"></i></a>
                    <a href="{{$Settings->facebook}}"><i class="fab fa-facebook-square"></i></a>
                    <a href="{{$Settings->instagram}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$Settings->twitter}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$Settings->telegram}}"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- module totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- module totop begin -->
</footer>
@endforeach