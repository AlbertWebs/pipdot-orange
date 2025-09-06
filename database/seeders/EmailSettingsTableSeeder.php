<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_settings')->delete();
        
        \DB::table('email_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'info@domain.com',
                'title' => 'Senders Name',
                'site_title' => 'Site Title',
                'driver' => 'mail',
                'host' => 'smtp.mailtrap.io',
                'port' => '25',
                'username' => '10ce55ec151848',
                'password' => '54a9cf8c6068dd',
                'encryption' => 'tls',
                'smtp_status' => 0,
            'email_body' => '<div class="wrapper" style="background-color: rgb(242, 242, 242); height: auto; min-height: 100%;">
<table style="border-collapse: collapse; table-layout: fixed; color: #b8b8b8; font-family: Ubuntu,sans-serif;" align="center">
<tbody>
<tr>
<td class="preheader__snippet" style="padding: 10px 0 5px 0; vertical-align: top; width: 280px;">&nbsp;</td>
<td class="preheader__webversion" style="text-align: right; padding: 10px 0 5px 0; vertical-align: top; width: 280px;">&nbsp;</td>
</tr>
</tbody>
</table>
<table class="layout layout--no-gutter" style="border-collapse: collapse; table-layout: fixed; margin-left: auto; margin-right: auto; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;" align="center">
<tbody>
<tr>
<td class="column" style="padding: 0px; text-align: left; vertical-align: top; color: rgb(96, 102, 109); line-height: 21px; font-family: sans-serif; width: 600px;">
<div style="font-size: 14px; margin-left: 20px; margin-right: 20px; margin-top: 24px;">
<div style="line-height: 10px; font-size: 1px;">&nbsp;</div>
</div>
<div style="font-size: 14px; margin-left: 20px; margin-right: 20px;">
<h2>Hi {{name}},</h2>
<p><strong>{{message}}</strong></p></div>
<div style="margin-left: 20px; margin-right: 20px; margin-bottom: 24px;">
<p class="size-14" style="margin-top: 0px; margin-bottom: 0px; line-height: 21px;"><font size="3"><b>Thanks,</b></font></p><p class="size-14" style="margin-top: 0px; margin-bottom: 0px; line-height: 21px;"><b style=""><font size="3">{{site_title}}</font></b></p>
</div>
</td>
</tr>
</tbody>
</table><br>
</div>',
                'created_at' => NULL,
                'updated_at' => '2020-07-08 20:26:09',
            ),
        ));
        
        
    }
}