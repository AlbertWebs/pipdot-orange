<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Swap;
use App\Models\Rate;
use App\Models\RateEUR;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }
        
        view()->composer('front.master', function($view)
        {
            $Rates = Rate::all();
            foreach ($Rates as $key => $value) {
                # code...
                $view->with('USDJPY', $value->USDJPY)->with('USDEUR', $value->USDEUR)->with('USDGBP', $value->USDGBP)->with('USDCAD', $value->USDCAD)->with('USDKES', $value->USDKES)->with('USDAUD', $value->USDAUD)->with('USDNZD', $value->USDNZD)->with('USDSGD', $value->USDSGD)->with('USDCHF', $value->USDCHF)->with('USDBTC', $value->USDBTC); 
            }

            $RateEUR = RateEUR::all();
            foreach ($RateEUR as $key => $value) {
                # code...
                $view->with('EURJPY', $value->USDJPY)->with('EURUSD', $value->EURUSD)->with('EURGBP', $value->EURGBP)->with('EURCAD', $value->USDCAD)->with('EURKES', $value->USDKES)->with('EURAUD', $value->USDAUD)->with('EURNZD', $value->USDNZD)->with('EURSGD', $value->USDSGD)->with('EURCHF', $value->USDCHF)->with('EURBTC', $value->USDBTC); 
            }
        });

        view()->composer('front.course', function($view)
        {
            $Rates = Rate::all();
            foreach ($Rates as $key => $value) {
                # code...
                $view->with('USDJPY', $value->USDJPY)->with('USDEUR', $value->USDEUR)->with('USDGBP', $value->USDGBP)->with('USDCAD', $value->USDCAD)->with('USDKES', $value->USDKES)->with('USDAUD', $value->USDAUD)->with('USDNZD', $value->USDNZD)->with('USDSGD', $value->USDSGD)->with('USDCHF', $value->USDCHF)->with('USDBTC', $value->USDBTC); 
            }

            $RateEUR = RateEUR::all();
            foreach ($RateEUR as $key => $value) {
                # code...
                $view->with('EURJPY', $value->USDJPY)->with('EURUSD', $value->USDEUR)->with('EURUSD', $value->EURGBP)->with('EURCAD', $value->USDCAD)->with('EURKES', $value->USDKES)->with('EURAUD', $value->USDAUD)->with('EURNZD', $value->USDNZD)->with('EURSGD', $value->USDSGD)->with('EURCHF', $value->USDCHF)->with('EURBTC', $value->USDBTC); 
            }
        });
    }
}
