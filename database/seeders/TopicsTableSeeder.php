<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('topics')->delete();
        
        \DB::table('topics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'course_id' => 1,
                'title' => 'Introduction to 1st Time Learners',
                'slung' => 'introduction-to-1st-time-learners',
                'placeholder' => '2021-04-1811:47:59imagev1.png',
                'meta' => 'This is a Topics Meta Data',
                'content' => '<p>This is a topics description</p>',
                'video' => 'kXYiU_JCYtU',
                'video_views' => '2',
                'video_duration' => '3:20',
                'created_at' => '2021-04-18 11:37:19',
                'updated_at' => '2021-04-18 11:37:19',
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 1,
                'title' => 'Introduction To Forex Brokers',
                'slung' => 'introduction-to-forex-brokers',
                'placeholder' => '2021-04-1811:52:48imagev2.png',
                'meta' => 'This is a topic Meta',
                'content' => '<p>This is a topic Description</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '4:50',
                'created_at' => '2021-04-18 11:52:48',
                'updated_at' => '2021-04-18 11:52:48',
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 1,
                'title' => 'How to choose a Forex Broker',
                'slung' => 'how-to-choose-a-forex-broker',
                'placeholder' => '2021-04-1811:54:01imagev3.png',
                'meta' => 'This is a meta tag',
                'content' => '<p>This is a decription field</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '7:59',
                'created_at' => '2021-04-18 11:54:01',
                'updated_at' => '2021-04-18 11:54:01',
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 1,
            'title' => 'How to choose a Forex Broker(2)',
                'slung' => 'how-to-choose-a-forex-broker',
                'placeholder' => '2021-04-1811:54:01imagev3.png',
                'meta' => 'This is a meta tag',
                'content' => '<p>This is a decription field</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '7:59',
                'created_at' => '2021-04-18 11:54:01',
                'updated_at' => '2021-04-18 11:54:01',
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 1,
            'title' => 'Introduction To Forex Brokers(2)',
                'slung' => 'introduction-to-forex-brokers',
                'placeholder' => '2021-04-1811:52:48imagev2.png',
                'meta' => 'This is a topic Meta',
                'content' => '<p>This is a topic Description</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '4:50',
                'created_at' => '2021-04-18 11:52:48',
                'updated_at' => '2021-04-18 11:52:48',
            ),
            5 => 
            array (
                'id' => 6,
                'course_id' => 1,
            'title' => 'Introduction To Forex Brokers(3)',
                'slung' => 'introduction-to-forex-brokers',
                'placeholder' => '2021-04-1811:52:48imagev2.png',
                'meta' => 'This is a topic Meta',
                'content' => '<p>This is a topic Description</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '4:50',
                'created_at' => '2021-04-18 11:52:48',
                'updated_at' => '2021-04-18 11:52:48',
            ),
            6 => 
            array (
                'id' => 7,
                'course_id' => 1,
            'title' => 'Introduction To Forex Brokers(4)',
                'slung' => 'introduction-to-forex-brokers',
                'placeholder' => '2021-04-1811:52:48imagev2.png',
                'meta' => 'This is a topic Meta',
                'content' => '<p>This is a topic Description</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '4:50',
                'created_at' => '2021-04-18 11:52:48',
                'updated_at' => '2021-04-18 11:52:48',
            ),
            7 => 
            array (
                'id' => 8,
                'course_id' => 1,
            'title' => 'Introduction To Forex Brokers(5)',
                'slung' => 'introduction-to-forex-brokers',
                'placeholder' => '2021-04-1811:52:48imagev2.png',
                'meta' => 'This is a topic Meta',
                'content' => '<p>This is a topic Description</p>',
                'video' => 'qWqyGdxpoVE',
                'video_views' => '2',
                'video_duration' => '4:50',
                'created_at' => '2021-04-18 11:52:48',
                'updated_at' => '2021-04-18 11:52:48',
            ),
        ));
        
        
    }
}