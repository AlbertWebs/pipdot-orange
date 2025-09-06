<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Rate;
use App\Models\RateEUR;
use DB;

class CallRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:update';

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

        $api_token = "2938e40512e07fd44f4d7ea8848f2c8f";
        $url = "http://data.fixer.io/api/latest?access_key=" . $api_token;
        
        $result = json_decode(file_get_contents($url), true);
        // 
        $Processed = $result['rates'];
        $Rates = RateEUR::all();
        if($Rates->isEmpty()){
             Rate::insert($Processed);
        }else{
            RateEUR::where('id', '1')->update($Processed);
        }
        // log to DB
        \Log::info($result);

        
        $api_token = "0530d86d42a92dd9cf1d3485cd82e637";
        $url = "http://api.currencylayer.com/live?access_key=" . $api_token;
        
        $result = json_decode(file_get_contents($url), true);
        // 
        $Processed = $result['quotes'];
        $Rates = Rate::all();
        if($Rates->isEmpty()){
             Rate::insert($Processed);
        }else{
             Rate::where('id', '1')->update($Processed);
        }
        // log to DB
        \Log::info($result);


        


    }
}
