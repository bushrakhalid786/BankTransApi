<?php

use Illuminate\Database\Seeder;
use App\BankTransaction;
use App\BankTransactionPart;

class BankTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankTransaction::create([
            'user_id'   => 1,
            'amount' => 200,
            'booking_date' => NOW(),
        ]);
        BankTransactionPart::create([
            'bank_transaction_id'   => 1,
            'amount' => 50,
            'transaction_reason_id' => 1,
        ]);
        BankTransactionPart::create([
            'bank_transaction_id'   => 1,
            'amount' => 150,
            'transaction_reason_id' => 2,
        ]);
    }
}
