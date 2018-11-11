<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionReason extends Model
{
    protected $fillable = [
        'title',
    ];

    /**
     * Get transaction with reason.
     */
    public function bankTransactionPart()
    {
        return $this->hasMany('App\BankTransactionPart');
    }
}
