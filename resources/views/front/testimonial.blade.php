   <!-- section why choose us begin -->
   <div class="uk-section in-padding-large-vertical@s in-profit-1">
    <center>
       <div class="uk-width-1-2@m uk-text-center">
           <h2 style="color:#002e44">EVERYONE IS TALKING ABOUT PIPDOT FX</h2>
       </div>
       <br><br>
    </center>
   <div class="uk-container">
       <div class="uk-grid-divider" data-uk-grid>
           <div class="uk-width-1-2@m">
               <div class="uk-child-width-1-1@s uk-child-width-1-1@m" data-uk-grid>
                <?php $Vids = DB::table('vids')->where('id','1')->get(); ?>
                @foreach ($Vids as $vids)
                   <video width="320" height="240" controls>
                       <source src="{{url('/')}}/uploads/banners/{{$vids->video}}" type="video/mp4">
                       <source src="movie.ogg" type="video/ogg">
                     Your browser does not support the video tag.
                     </video>
                @endforeach
               </div>
           </div>
           <div class="uk-width-expand@m in-margin-top-20@s">
               {{-- <h2 style="color:#002e44">SAMPLE VIDEO</h2> --}}
               <h2 style="color:#000000; margin-top:50px">Thanks to hundreds of students from over the years and counting</h2>
               <div class="uk-grid-large uk-flex-middle uk-grid" data-uk-grid="">
                
               </div>
               {{--  --}}
               
               {{--  --}}
           </div>
       </div>
   </div>
</div>
<!-- section why choose us end -->

{{-- Testimonials --}}
<div class="uk-section in-offset-top-20 uk-section-muted">
   <div class="uk-container">
       <div class="uk-grid-medium uk-child-width-1-1@m in-testimonial-8 uk-grid" data-uk-grid="">
          <div class="uk-slider-container-offset" uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                    <?php $Testimonials = DB::table('testimonials')->get(); ?>
                    @foreach ($Testimonials as $item)
                    <li>
                        <div class="uk-first-column">
                            <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                                <img class="uk-position-bottom-right" src="{{url('/')}}/uploads/testimonials/{{$item->image}}" alt="client-testimoni" width="200">
                                <div class="uk-card-header">
                                    <blockquote>
                                        <p>{!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!} </p>
                                    </blockquote>
                                </div>
                                <div class="uk-card-footer">
                                    <img src="{{url('/')}}/favicon/ms-icon-144x144.png" alt="client-logo" width="54">
                                    <blockquote>
                                        <footer>{{$item->name}}<br><cite>{{$item->position}}</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a class="uk-position-center-left uk-position-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
          </div>
        </div>
   </div>
</div>