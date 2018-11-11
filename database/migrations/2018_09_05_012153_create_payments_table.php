<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedinteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedinteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('type');
            $table->integer('code');
            $table->date('date');
            $table->float('amount');
            $table->timestamps();
            $table->float('payment_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
