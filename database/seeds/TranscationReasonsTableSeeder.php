<?php

use Illuminate\Database\Seeder;
use App\TransactionReason;

class TranscationReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionReason::create([
            'title'   => 'Debtor Payback',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        TransactionReason::create([
            'title'   => 'Bank Charge',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        TransactionReason::create([
            'title'   => 'Payment Request',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        TransactionReason::create([
            'title'   => 'Unidentified',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
