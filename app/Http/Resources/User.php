<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'transactionid'     => $this->id,
                'amount'            => $this->amount,
                'bookingdate'       => $this->booking_date,
                'bookingpart'       => $this->BankTransactionPart,
        ];

    }
}
