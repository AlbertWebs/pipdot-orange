<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrivaciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('privacies')->delete();
        
        \DB::table('privacies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Personal Information Collected',
                'content' => '<p>pipdotfx.com will gather information in the background when any person or legal entity visits the pipdotfx.com website using cookies. This may include IP address, device type, Internet browser type, operating system, location, and other device-specific information. Data collected is for business intelligence meant for enhancing user experience any time a user visits pipdotfx.com.</p>',
                'created_at' => '2021-04-13 14:14:39',
                'updated_at' => '2021-04-13 14:14:39',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Management of personal data',
                'content' => '<p>You can choose whether you wish to receive promotional communications from our website by email using the subscribe form in the footer section of this page. If you receive promotional email or SMS messages from us and would like to opt-out, you can request deletion of your email info@pipdotfx.com.</p>',
                'created_at' => '2021-04-13 14:15:31',
                'updated_at' => '2021-04-13 14:15:31',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Contact',
                'content' => '<p>You have the right to review the personal data we keep about you. You can request an overview of your personal data that by emailing info@pipdotfx.com with the subject line Request for personal information. To help us prevent fraudulent collection of personal information, please include a scan of your passport or identity card. If you would like us to remove your personal information from our database, please email info@pipdotfx.com with the subject line Request for removal of personal information. Please bear in mind that we may need to retain certain information for legal and/or administrative purposes such as record keeping or to detect fraudulent or criminal activities.<br />
&nbsp;</p>',
                'created_at' => '2021-04-13 14:16:04',
                'updated_at' => '2021-04-13 14:16:04',
            ),
        ));
        
        
    }
}