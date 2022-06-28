<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_order');
            $table->foreign('id_order')
                    ->references('id')
                    ->on('orders')
                    ->onDelete('cascade');
            $table->integer('id_prod');
            $table->string('photo');
            $table->string('name');
            $table->integer('regular_price');
            $table->integer('sale_price');
            $table->integer('temp_price')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
