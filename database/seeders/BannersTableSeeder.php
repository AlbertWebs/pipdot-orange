<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'about_us',
                'section' => 'about_us',
                'image' => 'single-service1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'contact_us',
                'section' => 'contact_us',
                'image' => 'single-service1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'our_courses',
                'section' => 'our_courses',
                'image' => 'single-service1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'legal_pages',
                'section' => 'about_us',
                'image' => 'single-service1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'home_page',
                'section' => 'background',
                'image' => 'single-service1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'faq_page',
                'section' => 'banner',
                'image' => 'in-blog-image-10.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'home_page_one',
                'section' => 'banner',
                'image' => 'mayofi-HASoyURgPMY-unsplash.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'home_page_two',
                'section' => 'banner',
                'image' => 'marga-santoso-OmPqCwX422Y-unsplash.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'home_page_three',
                'section' => 'banner',
                'image' => 'in-section-profit-3.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'signin',
                'section' => 'banner',
                'image' => 'in-signin-image.jpg',
                'created_at' => '2021-04-16 00:00:00',
                'updated_at' => '2021-04-16 00:00:00',
            ),
        ));
        
        
    }
}