<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
            'title' => '1st Time Learner Approach(With Live Examples)',
                'slung' => '1st-time-learner-approachwith-live-examples',
            'meta' => 'Beginners course for understanding the financial market(ideal for new traders)',
                'content' => '<ul>
<li>One of the industry leaders</li>
<li>Advanced risk management</li>
<li>Award-winning customer service*</li>
<li>Low minimum deposit</li>
</ul>',
                'icon' => 'in-section-profit-13a.png',
                'image' => 'in-section-profit-13a.png',
                'price' => 400,
                'created_at' => '2021-04-16 00:00:00',
                'updated_at' => '2021-04-16 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
            'title' => '3 Simple Strategies: Beginner to Pro Approach(With Live Examples)',
                'slung' => '3-simple-strategies-beginner-to-pro-approachwith-live-examples',
                'meta' => 'Receive even deeper knowledge for deeper understanding of the financial markets',
                'content' => '<ul>
<li>One of the industry leaders</li>
<li>Advanced risk management</li>
<li>Award-winning customer service*</li>
<li>Low minimum deposit</li>
</ul>',
                'icon' => 'in-section-profit-13b.png',
                'image' => 'in-section-profit-13b.png',
                'price' => 600,
                'created_at' => '2021-04-16 00:00:00',
                'updated_at' => '2021-04-16 00:00:00',
            ),
        ));
        
        
    }
}