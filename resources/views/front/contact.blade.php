@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<style>
    .spinner{

    }
</style>
<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                <div class="uk-width-1-1">
                    <iframe class="uk-width-1-1 uk-height-large uk-border-rounded" src="{{$Settings->map}}">
                    </iframe>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid>
                        <div>
                            <h5 class="uk-margin-remove-bottom">Address</h5>
                            <p class="uk-margin-small-top">{{$Settings->address}} - {{$Settings->location}}</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">Email</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">{{$Settings->email_one}}</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">for public inquiries</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">Call</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">{{$Settings->mobile_one}}</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Mon - Fri, 9am - 5pm</p>
                        </div>
                    </div>
                    <hr class="uk-margin-medium">
                    <h4 class="uk-margin-remove-bottom uk-text-muted uk-text-center">Have a questions?</h4>
                    <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in touch</span></h1>
                    <form id="contact-forms" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid>
                        @honeypot
                        {{csrf_field()}}
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                            <input required class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                            <input required class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                        </div>
                        <div class="uk-width-1-1 uk-inline">
                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                            <input required class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="uk-width-1-1">
                            <textarea required class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Send Message <img class="spinner" width="32" src="{{asset('theme/img/ZZ5H.gif')}}" alt=""></button>
                        </div>
                        <div class="uk-alert-success messageBack"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endforeach
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  $( document ).ready(function() {
    $('.spinner').hide();
  });

  $("#contact-forms").submit(function(stay){
      stay.preventDefault()
      var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
      $('.spinner').show();
      $.ajax({
         type: 'POST',
         url: "{{ url('/') }}/send-message/contact-form",
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
@endsection