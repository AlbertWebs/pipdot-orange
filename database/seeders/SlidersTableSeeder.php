<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Learn Forex trading with our <span class="in-highlight">courses</span>.',
                'content' => '<p>Profit Inc inner circle weekly educational workshops are a great resource for any skill level trader</p>

<p>&nbsp;</p>',
                'image' => 'in-slideshow-image-1.png',
                'created_at' => '2021-04-04 20:19:29',
                'updated_at' => '2021-04-04 20:19:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Multi-award <span class="in-highlight">winning</span> forex provider.',
                'content' => '<p>We have been proud to offer traders a powerful and advanced trading platform technologies</p>',
                'image' => 'in-slideshow-image-4.png',
                'created_at' => '2021-04-04 20:27:47',
                'updated_at' => '2021-04-04 20:27:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Let top <span class="in-highlight">traders</span> do the job for you!',
                'content' => '<p>Covesting allows you to automatically copy top performing traders and achieve the returns</p>',
                'image' => 'in-slideshow-image-2.png',
                'created_at' => '2021-04-09 13:29:14',
                'updated_at' => '2021-04-09 13:29:14',
            ),
        ));
        
        
    }
}