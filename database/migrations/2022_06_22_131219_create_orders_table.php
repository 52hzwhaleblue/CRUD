<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email');
            $table->string('fullname');
            $table->integer('total')->nullable();
            $table->unsignedInteger('id_order_status');
            $table->foreign('id_order_status')
            ->references('id')
            ->on('order_stauts')
            ->onDelete('cascade');

            $table->unsignedInteger('id_payment_method');
            $table->foreign('id_payment_method')
            ->references('id')
            ->on('payment_methods')
            ->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
