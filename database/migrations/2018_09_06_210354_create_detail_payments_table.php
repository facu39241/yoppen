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
            $table->unsignedinteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
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
