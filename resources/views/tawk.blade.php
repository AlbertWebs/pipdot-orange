<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
    @if($Settings->tawkToStatus == 0)

    @else 
    {!! html_entity_decode($Settings->tawkTo, ENT_QUOTES, 'UTF-8') !!}
    @endif
@endforeach
