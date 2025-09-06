<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CopyrightTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('copyright')->delete();
        
        \DB::table('copyright')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '<ul>
<li>you may print or download to a local hard disk extracts for your personal and non-commercial use only</li>
<li>you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material</li>
</ul>

<p>You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</p>',
                'created_at' => '2021-04-13 00:00:00',
                'updated_at' => '2021-04-13 00:00:00',
            ),
        ));
        
        
    }
}