<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankTransaction extends JsonResource
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
                 'userid'           => $this->user_id,
                 'amount'           => $this->amount,
                 'bookingdate'      => $this->booking_date,
                 'bookingpart'      => $this->BankTransactionPart->map(function ($bookingpart) {
                                    return ['amount' => $bookingpart->amount, 'transation_reason_id' => $bookingpart->getReason()];
                 }),       
        ];
    }
}
