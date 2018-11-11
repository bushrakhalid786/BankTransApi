<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankTransactionPart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bank_transaction_id', 'amount', 'transaction_reason_id',
    ];


    /**
     * Get the main transaction.
     */
    public function bankTransactions()
    {
        return $this->belongsTo('App\BankTransaction');
    }

    /**
     * Get the transaction part reason.
     */
    public function transactionReason()
    {
        return $this->belongsTo('App\TransactionReason');
    }

    /**
     * Get the reason title.
     */
    public function getReason()
    {
        return $this->transactionReason->title;
    }

    
}
