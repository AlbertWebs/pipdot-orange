<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terms')->delete();
        
        \DB::table('terms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Links To Other Websites',
                'content' => '<p>Our Service may contain links to third-party websites or services that are not owned or controlled by Pipdot FX Consultants. Pipdot FX Consultants has no control over and assumes no responsibility for, the content, privacy policies, or practices of any third-party websites or services. You further acknowledge and agree that Pipdot FX Consultants shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods, or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party websites or services that you visit.</p>',
                'created_at' => '2021-04-13 14:53:09',
                'updated_at' => '2021-04-13 14:53:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Changes',
                'content' => '<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>',
                'created_at' => '2021-04-13 14:54:20',
                'updated_at' => '2021-04-13 14:54:20',
            ),
        ));
        
        
    }
}