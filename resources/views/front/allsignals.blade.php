@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
</header>

<main>
         <!-- section content begin -->
         <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-12">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
                    <div class="uk-width-1-1@m uk-text-center">
                        <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-card-body">
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-center">Currency Pair</th>
                                            <th class="uk-text-center">Date and Time</th>
                                            <th class="uk-text-center">Position</th>
                                            <th class="uk-text-center">TP</th>
                                            <th class="uk-text-center">SL</th>
                                            <th class="uk-text-center uk-visible@s">Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Signal as $Signal)
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="{{asset('theme/img/in-lazy.svg')}}" data-src="{{asset('theme/img/in-profit-fxeur.svg')}}" alt="fx-flag" width="29" height="17" data-uk-img><span class="in-pairname">EURUSD</span></td>
                                            <td>
                                                <span class="uk-label uk-label-success uk-border-pill">
                                                    <?php 
                                                    $RawDate = $Signal->datetime;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                    $Hour = date('H',$FormatDate);
                                                    $Minute = date('i',$FormatDate);
                                                    $Second = date('s',$FormatDate);
                                                ?>
                                                {{$Date}}, {{$date}} {{$Month}}, {{$Year}} | {{$Hour}} {{$Minute}} {{$Second}}
                                                </span>
                                            </td>
                                            <td class="uk-visible@s">{{$Signal->position}}</td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">{{$Signal->tp}}</span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">{{$Signal->sl}}</span></td>
                                            <td class="uk-visible@s">{{$Signal->comments}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
</main>

@endforeach
@endsection