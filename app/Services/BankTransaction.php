<?php

namespace App\Services;

use App\BankTransaction as BankTransactionModal;
use App\BankTransactionPart;

class BankTransaction
{
    public static function create($user_id, $amount, $bookingpart)
    {
        $transaction                = new BankTransactionModal();
        $transaction->user_id       = $user_id;
        $transaction->amount        = $amount;
        $transaction->booking_date  = now();
        $transaction->save();

        $bankTransactionParts = $bookingpart;

        foreach ($bankTransactionParts as $bankTransactionPart) {
            $transactionPart                        = new BankTransactionPart();
            $transactionPart->bank_transaction_id   = $transaction->id;
            $transactionPart->amount                = $bankTransactionPart['amount'];
            $transactionPart->transaction_reason_id = $bankTransactionPart['transaction_reason_id'];
            $transactionPart->save();
        }
        return $transaction;
    }
}