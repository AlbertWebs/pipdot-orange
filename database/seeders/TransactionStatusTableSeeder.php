<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_status')->delete();
        
        \DB::table('transaction_status')->insert(array (
            0 => 
            array (
                'transactionStatusID' => 1,
                'ReceiptNo' => 'PDE81HISMM',
                'ConversationID' => 'AG_20210414_00007b4af4685369a799',
                'FinalisedTime' => '20210414173306',
                'Amount' => '5000',
                'TransactionStatus' => 'Completed',
                'ReasonType' => 'Pay Bill Online',
                'DebitPartyCharges' => NULL,
                'DebitAccountType' => 'MMF Account For Customer',
                'InitiatedTime' => '20210414173304',
                'OriginatorConversationID' => '30928-20253143-1',
                'CreditPartyName' => '603021 - Safaricom3044',
                'CreditPartyCharges' => 'Pay Utility Charge By Organization|KES|55.00',
                'DebitPartyName' => '254708374149 - John Doe',
                'updatedTime' => '2021-04-14 17:30:54',
            ),
            1 => 
            array (
                'transactionStatusID' => 2,
                'ReceiptNo' => 'PDE81HISMM',
                'ConversationID' => 'AG_20210414_00007b4af4685369a799',
                'FinalisedTime' => '20210414173306',
                'Amount' => '5000',
                'TransactionStatus' => 'Completed',
                'ReasonType' => 'Pay Bill Online',
                'DebitPartyCharges' => NULL,
                'DebitAccountType' => 'MMF Account For Customer',
                'InitiatedTime' => '20210414173304',
                'OriginatorConversationID' => '30928-20253143-1',
                'CreditPartyName' => '603021 - Safaricom3044',
                'CreditPartyCharges' => 'Pay Utility Charge By Organization|KES|55.00',
                'DebitPartyName' => '254708374149 - John Doe',
                'updatedTime' => '2021-04-14 17:33:17',
            ),
        ));
        
        
    }
}