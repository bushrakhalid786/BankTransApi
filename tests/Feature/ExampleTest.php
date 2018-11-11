<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\BankTransaction;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $response = $this->get('/api/trans/1');
    //     $response->assertStatus(200);
    //     echo "test1";
    // }

    public function testBasicTest()
    {

        $bookingpart = [0 => ['amount' => 2, 'transaction_reason_id' => 1]];
        $data  = BankTransaction::create(1, 150, $bookingpart);  
        $bankTransactionPart = $data->bankTransactionPart[0];
        $this->assertEquals($data->user_id, 1);
        $this->assertSame($bankTransactionPart->transaction_reason_id, 1);
        $this->assertEquals($bankTransactionPart->amount, 2);
        
    }
}
