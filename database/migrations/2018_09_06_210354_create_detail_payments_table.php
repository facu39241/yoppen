<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->string('name');
            $table->integer('code');
            $table->float('price');
            $table->integer('quantity');
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
        Schema::dropIfExists('detail_payments');
    }
}
