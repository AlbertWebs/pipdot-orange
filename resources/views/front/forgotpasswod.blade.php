
    <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
    @foreach ($SiteSettings as $Settings)
    <!DOCTYPE html>
    <html lang="zxx" dir="ltr">
  
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="description" content="PipdotFX Consultants Limited">
        <meta name="keywords" content="Pipdot Fx Consultants">
        <meta name="author" content="Designekta Studios">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#e9e8f0" />
        <!-- Site Properties -->
        <title>Sign in - {{$Settings->sitename}}</title>
        @include('favicon')
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('theme/css/vendors/uikit.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">

    </head>
    
    <body>
        <!-- preloader begin -->
        <div class="in-loader">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- preloader end -->
        <main>
            <?php $Banner = DB::table('banners')->where('name','signin')->get(); ?>
            @foreach ($Banner as $Banner)
            <!-- section content begin -->
            <div class="uk-section uk-padding-remove-vertical">
                <div class="uk-container uk-container-expand">
                    <div class="uk-grid" data-uk-height-viewport="expand: true">
                        <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url('{{url('/uploads/banners')}}/{{$Banner->image}}');">
                        </div>
                      
                        <div class="uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="uk-grid uk-flex-center">
                                <div class="uk-width-3-5@m">
                                    <div class="in-padding-horizontal@s">
                                        <center>
                                            @if(Session::has('message'))
                                                          <div class="uk-alert-success" uk-alert>{{ Session::get('message') }}</div>
                                           @endif
                                           @if (session('status'))
                                                <div class="uk-alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                        </center>

                                        <!-- module logo begin -->
                                        <a class="uk-logo" href="{{url('/')}}">
                                            <img class="in-offset-top-10" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="logo" width="230" data-uk-img>
                                        </a>
                                        <!-- module logo begin -->
                                        <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Reset Password</p>
                                        <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a href="{{url('/')}}/forex-courses/login">Sign In</a></p>
                                        <!-- login form begin -->
                                        <form class="uk-grid uk-form" method="POST" action="{{ route('password.email') }}">
                                            {{csrf_field()}}
                                            
                                            <div class="uk-margin-small uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                                <input name="email" value="{{ old('email') }}"  class="uk-input uk-border-rounded" id="username" value="" type="text" placeholder="email">
                                            </div>

             
                                            @error('email')
                                                <span class="uk-alert-danger" role="alert">
                                                    <small><strong>{{ $message }}</strong></small>
                                                </span>
                                            @enderror

                                           
                                          
                                            <div class="uk-margin-small uk-width-1-1">
                                                <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit"> Send Password Reset Link </button>
                                            </div>
                                        </form>
                                        <!-- login form end -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section content end -->
            @endforeach
        </main>
        <!-- Javascript -->
        <script src="{{asset('theme/js/vendors/uikit.min.js')}}"></script>
        <script src="{{asset('theme/js/vendors/indonez.min.js')}}"></script>
    </body>
    </html>
    @endforeach


