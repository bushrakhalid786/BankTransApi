<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'amount', 'booking_date',
    ];

    /**
     * Get the user with the transaction.
     */
    public function bankTransactions()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get transaction parts.
     */
    public function bankTransactionPart()
    {
        return $this->hasMany('App\BankTransactionPart', 'bank_transaction_id');
    }

}
