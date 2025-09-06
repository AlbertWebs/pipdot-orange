<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SignalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('signals')->delete();
        
        \DB::table('signals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'currency_pair' => 'EURUSD',
                'datetime' => '2021-04-19T22:59',
                'position' => 'Closed at 1.117 Profit:1',
                'tp' => '1.127',
                'sl' => '1.108',
                'comments' => 'Close the trade Now',
                'created_at' => '2021-04-19 17:59:34',
                'updated_at' => '2021-04-19 17:59:34',
            ),
            1 => 
            array (
                'id' => 2,
                'currency_pair' => 'USDCAD',
                'datetime' => '2021-04-19T23:07',
                'position' => 'Closed at 1:08 Profit: 0',
                'tp' => '1.1456',
                'sl' => '1.109',
                'comments' => 'Open New short trade and place SL/TP Level',
                'created_at' => '2021-04-19 18:06:50',
                'updated_at' => '2021-04-19 18:06:50',
            ),
        ));
        
        
    }
}