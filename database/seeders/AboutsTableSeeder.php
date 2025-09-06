<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '<p>At Pipdot, we strive to offer our students the best value for money, ALL IN ONE bundle forex course that teaches and illustrates with live examples on how to trade the forex market.</p>
<p>Our course outlines an easy to understand concept that makes it easy for beginner and intermediate learners to understand and interpret the forex market through chart pattern analysis described as technical and fundamental.</p>
<p>We bring on board years of experience trading the forex market and we share this knowledge with you for it to have a positive impact in your trading results..</p>',
                'mission' => 'e bring on board years of experience trading the forex market and we share this knowledge with you for it to have a positive impact in your trading results..',
                'vision' => 'e bring on board years of experience trading the forex market and we share this knowledge with you for it to have a positive impact in your trading results..',
                'values' => NULL,
                'image_one' => NULL,
                'image_two' => NULL,
                'image_three' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}