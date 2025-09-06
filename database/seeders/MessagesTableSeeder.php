<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject' => 'Arrival and Evening Dhow Cruise 1',
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-04-06 00:00:00',
                'updated_at' => '2021-04-06 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'subject' => 'Arrival and Evening Dhow Cruise 2',
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-04-06 00:00:00',
                'updated_at' => '2021-04-06 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'subject' => 'Arrival and Evening Dhow Cruise 3
',
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-04-06 00:00:00',
                'updated_at' => '2021-04-06 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'subject' => 'Arrival and Evening Dhow Cruise 4
',
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-04-06 00:00:00',
                'updated_at' => '2021-04-06 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'subject' => 'Arrival and Evening Dhow Cruise 5
',
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-04-06 00:00:00',
                'updated_at' => '2021-04-06 00:00:00',
            ),
        ));
        
        
    }
}