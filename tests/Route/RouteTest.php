<?php

namespace Tests\Route;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * Get all transaction for a user.
     *
     * @return void
     */
    public function getUserTransactionsTest()
    {
        $response = $this->get('/api/trans/1');

        $response->assertStatus(200);
        echo "test1";
    }

    /**
     * Get transaction and parts of a single transaction
     *
     * @return void
     */
    public function getTransactionTest()
    {
        $response = $this->get('/api/tran/1');

        $response->assertStatus(200);
        echo "test2";
    }

    /**
     * delete transaction
     *
     * @return void
     */
    public function deleteTransactionTest()
    {
        $response = $this->delete('/api/tran/1');

        $response->assertStatus(200);
        echo "test3";
    }
}
