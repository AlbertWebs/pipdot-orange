<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Albert Muhatia',
                'content' => '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>',
                'company' => 'Designekta Studios',
                'position' => 'Magaging Partner',
                'rating' => '5',
                'image' => '2021-04-0508:07:15image3.png',
                'created_at' => '2021-04-05 08:07:15',
                'updated_at' => '2021-04-05 08:07:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albert Muhatia',
                'content' => '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>',
                'company' => 'Designekta Studios',
                'position' => 'Magaging Partner',
                'rating' => '5',
                'image' => '2021-04-0508:07:15image3.png',
                'created_at' => '2021-04-05 08:07:15',
                'updated_at' => '2021-04-05 08:07:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albert Muhatia',
                'content' => '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>',
                'company' => 'Designekta Studios',
                'position' => 'Magaging Partner',
                'rating' => '5',
                'image' => '2021-04-0508:07:15image3.png',
                'created_at' => '2021-04-05 08:07:15',
                'updated_at' => '2021-04-05 08:07:15',
            ),
        ));
        
        
    }
}