<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Forex market',
                'slung' => 'forex-market',
                'content' => '<p>This is a sample Category</p>',
                'image' => '1.png',
                'created_at' => '2021-03-30 00:00:00',
                'updated_at' => '2021-03-30 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Currencies',
                'slung' => NULL,
                'content' => '<p>Sample Category</p>',
                'image' => '2.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Indices',
                'slung' => 'indices',
                'content' => '<p>Sample Category</p>',
                'image' => '3.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Futures',
                'slung' => 'futures',
                'content' => '<p>Sample Category</p>',
                'image' => '6.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Commodities',
                'slung' => 'commodities',
                'content' => '<p>Speedy Deleition Two</p>',
                'image' => 'single-service1.jpg',
                'created_at' => '2021-04-04 19:40:43',
                'updated_at' => '2021-04-04 19:40:43',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Stocks',
                'slung' => 'stocks',
                'content' => NULL,
                'image' => '0',
                'created_at' => '2021-04-12 18:31:51',
                'updated_at' => '2021-04-12 18:31:51',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Crypto Trade',
                'slung' => 'crypto-trade',
                'content' => NULL,
                'image' => '0',
                'created_at' => '2021-04-12 18:32:07',
                'updated_at' => '2021-04-12 18:32:07',
            ),
        ));
        
        
    }
}