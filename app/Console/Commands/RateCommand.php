<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swap;
use App\Models\Rate;
use DB;


class RateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         // Get the latest EUR/USD rate
         $USD_JPY_Variable = Swap::latest('USD/JPY');
         $EUR_JPY_Variable = Swap::latest('EUR/JPY');
         $EUR_USD_Variable = Swap::latest('EUR/USD');
         $USD_GBP_Variable = Swap::latest('USD/GBP');
         $USD_CAB_Variable = Swap::latest('USD/CAD');
         $USD_KES_Variable = Swap::latest('USD/KES');
         $EUR_KES_Variable = Swap::latest('EUR/KES');


         $USD_JPY = $USD_JPY_Variable->getValue();
         $EUR_JPY = $EUR_JPY_Variable->getValue();
         $EUR_USD = $EUR_USD_Variable->getValue();
         $USD_GBP = $USD_GBP_Variable->getValue();
         $USD_CAB = $USD_CAB_Variable->getValue();
         $USD_KES = $USD_KES_Variable->getValue();
         $EUR_KES = $EUR_KES_Variable->getValue();
        //  Logg These To Database
        // check_empty
        $Rates = Rate::all();
        if($Rates->isEmpty()){
                $Rate = new Rate;
                $Rate->USD_JPY = $USD_JPY;
                $Rate->EUR_JPY = $EUR_JPY;
                $Rate->EUR_USD = $EUR_USD;
                $Rate->USD_GBP = $USD_GBP;
                $Rate->USD_CAB = $USD_CAB;
                $Rate->USD_KES = $USD_KES;
                $Rate->EUR_KES = $EUR_KES;
                $Rate->save();
        }else{
            $updateDetails = array(
                'USD_JPY' => $USD_JPY,
                'EUR_JPY' => $EUR_JPY,
                'EUR_USD' => $EUR_USD,
                'USD_GBP' => $USD_GBP,
                'USD_CAB' => $USD_CAB,
                'USD_KES' => $USD_KES,
                'EUR_KES' => $EUR_KES,
            );
            DB::table('rates')->update($updateDetails);
        }
    }
}
