<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'albertmuhatia@gmail.com',
                'token' => '$2y$10$WFxw5Ziob1De8TScz8MSguy5FBtklFK41djAI3ROtYQ/Bd8DWWmne',
                'created_at' => '2021-04-20 17:35:23',
            ),
        ));
        
        
    }
}