<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransactionParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_transaction_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bank_transaction_id');
            $table->foreign('bank_transaction_id')->references('id')->on('bank_transactions');
            $table->decimal('amount');
            $table->unsignedInteger('transaction_reason_id');
            $table->foreign('transaction_reason_id')->references('id')->on('transaction_reasons');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_transaction_parts');
    }
}
