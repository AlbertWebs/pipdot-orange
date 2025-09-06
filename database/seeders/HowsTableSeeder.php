<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hows')->delete();
        
        \DB::table('hows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Register',
                'slung' => 'instruction-one',
                'content' => 'Choose your option/level depending on your know how in the financial markets',
                'image' => NULL,
                'created_at' => '2021-04-14 07:03:15',
                'updated_at' => '2021-04-14 07:03:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Fund',
                'slung' => 'instruction-two',
                'content' => 'Fund your account using a wide range of funding methods.',
                'image' => NULL,
                'created_at' => '2021-04-14 07:03:46',
                'updated_at' => '2021-04-14 07:03:46',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Learn',
                'slung' => 'instructions-three',
                'content' => 'Get Access to a liftime account with 100+ practical tutorials on financial markets',
                'image' => NULL,
                'created_at' => '2021-04-14 07:03:56',
                'updated_at' => '2021-04-14 07:03:56',
            ),
        ));
        
        
    }
}