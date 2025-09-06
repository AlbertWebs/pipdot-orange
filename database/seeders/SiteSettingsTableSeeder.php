<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_site_settings')->delete();
        
        \DB::table('_site_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitename' => 'Pipdot Consultants Limited',
                'logo' => 'PIPDOT LOGO hor-01.png',
                'logo_footer' => 'PIPDOT LOGO FINAL B-01.png',
                'logo_two' => 'PIPDOT LOGO-01.png',
                'favicon' => 'pipdot favcon.png',
                'email' => 'info@pipdotfx.com',
                'email_one' => 'tahzmuhahi@gmail.com',
                'mobile_one' => '0723014032',
                'mobile_two' => '0723014032',
                'mpesa' => '942527',
                'paypal' => 'info@pipdotfx.com',
                'tagline' => 'Pipdot Consultants Limited Tagline',
                'url' => 'https://pipdotfx.com',
                'location' => 'Westlands',
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
                'address' => 'Westie',
                'facebook' => 'facebook.com',
                'whatsapp' => '+254723014032',
                'telegram' => '0723014032',
                'twitter' => 'twitter.com',
                'linkedin' => 'linkedin.com',
                'instagram' => 'instagram.com',
                'youtube' => 'youtube.com',
                'google' => 'google.com',
            'risks' => '<p>Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>',
                'welcome' => '<p>afad sfa afaf hahajksa aaaaaaaaaa</p>',
                'tawkTo' => '<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=\'https://embed.tawk.to/6075bc90067c2605c0c20999/1f35uib4r\';
s1.charset=\'UTF-8\';
s1.setAttribute(\'crossorigin\',\'*\');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->',
                'tawkToStatus' => 1,
                'whatsAppStatus' => 1,
                'created_at' => '2021-03-25 00:00:00',
                'updated_at' => '2021-03-25 00:00:00',
            ),
        ));
        
        
    }
}