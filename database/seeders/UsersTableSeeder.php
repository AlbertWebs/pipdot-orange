<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Gitonga',
                'email' => 'admin@designekta.com',
                'status' => 0,
                'mobile' => '0784220408',
                'address' => 'Westlands',
                'country' => 'Afghanistan ',
                'image' => '2021-04-0508:07:15image3.png',
                'email_verified_at' => NULL,
                'is_admin' => 1,
                'password' => '$2y$10$rKc6yVhdUj9zbDrBrM8dBODwbvwQiNfbLtwwqcVlt1vxlqbiTVYgS',
                'remember_token' => NULL,
                'created_at' => '2021-03-23 10:46:03',
                'updated_at' => '2021-03-23 10:46:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albert Muhatia',
                'email' => 'user@designekta.com',
                'status' => 0,
                'mobile' => '254723014032',
                'address' => 'Kabete Heights, Lower Kabete Road',
                'country' => 'Kenya',
                'image' => 'in-client-testi-4.svg',
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$cadBor5lHmWC0QWHYV0h0empYXRM7BdlrhwIemtxDl1PcewVJYUYO',
                'remember_token' => NULL,
                'created_at' => '2021-03-23 10:46:03',
                'updated_at' => '2021-03-23 10:46:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albert Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'status' => 0,
                'mobile' => '0723014032',
                'address' => '80',
                'country' => 'Kenya',
                'image' => 'in-team-2.png',
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$w/.FFEs8cCJBQUvuyxOMAe84gFzSttHtsDWwJyaGwZ/qR.H8Qjw5G',
                'remember_token' => NULL,
                'created_at' => '2021-04-06 12:02:37',
                'updated_at' => '2021-04-06 12:02:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rector Omari',
                'email' => 'rector@gmail.com',
                'status' => 0,
                'mobile' => '0790841987',
                'address' => 'Mountain Mall, Thika Road',
                'country' => 'Uganda',
                'image' => '2021-04-0508:07:15image3.png',
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$adt78gI18rm2atKo1xvIb.ey2jYF29rSTylyn5nJ1625h7A.OHpcS',
                'remember_token' => NULL,
                'created_at' => '2021-04-06 12:08:13',
                'updated_at' => '2021-04-06 12:08:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Albert  Muhatia',
                'email' => 'nektatech@gmail.com',
                'status' => 0,
                'mobile' => NULL,
                'address' => NULL,
                'country' => NULL,
                'image' => NULL,
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$QqoTjuzC6lWm5qmKiL8FJu/PDZTelGtjcMPlVCy5L4r7g92.hCzfq',
                'remember_token' => NULL,
                'created_at' => '2021-04-20 16:59:18',
                'updated_at' => '2021-04-20 16:59:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mark Khamala',
                'email' => 'albertmuhatia58@gmail.com',
                'status' => 0,
                'mobile' => NULL,
                'address' => NULL,
                'country' => NULL,
                'image' => NULL,
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$2YegmSScAx0M5cCODszMmOEY76MqO/rqRQVk9ctAdThme7.7BBTn.',
                'remember_token' => NULL,
                'created_at' => '2021-04-20 17:07:16',
                'updated_at' => '2021-04-20 17:07:16',
            ),
        ));
        
        
    }
}