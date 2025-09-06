<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LnmoApiResponseTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lnmo_api_response')->delete();
        
        \DB::table('lnmo_api_response')->insert(array (
            0 => 
            array (
                'lnmoID' => 1,
                'user_id' => 2,
                'status' => 0,
                'Amount' => '5',
                'MpesaReceiptNumber' => 'PDD3RG8BZ1',
                'TransactionDate' => '20210413085626',
                'PhoneNumber' => '254723014032',
                'updateTime' => '2021-04-13 09:12:22',
            ),
        ));
        
        
    }
}