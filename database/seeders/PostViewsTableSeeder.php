<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_views')->delete();
        
        
        
    }
}