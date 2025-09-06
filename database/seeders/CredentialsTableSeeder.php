<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CredentialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_credentials')->delete();
        
        
        
    }
}