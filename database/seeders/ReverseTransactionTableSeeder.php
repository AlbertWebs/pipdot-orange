<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReverseTransactionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reverse_transaction')->delete();
        
        \DB::table('reverse_transaction')->insert(array (
            0 => 
            array (
                'transactionstatusID' => 1,
                'DebitAccountBalance' => 'Utility Account|KES|11862637.63|11862637.63|1116744.00|0.00',
                'Amount' => '5000',
                'TransCompletedTime' => '20210414175040',
                'OriginalTransactionID' => 'PDE81HISMM',
                'Charge' => '0',
                'CreditPartyPublicName' => '254708374149 - John Doe',
                'DebitPartyPublicName' => '603021 - Safaricom3044',
                'updateTime' => '2021-04-14 17:06:30',
            ),
        ));
        
        
    }
}