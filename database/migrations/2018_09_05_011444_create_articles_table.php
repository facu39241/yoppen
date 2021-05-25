<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('provisioner_id');
            $table->foreign('provisioner_id')->references('id')->on('provisioners');
            $table->string('name');
            $table->integer('code')->unique();
            $table->float('price');
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('web')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
