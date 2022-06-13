<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('id_list');
            $table->foreign('id_list')
                ->references('id')
                ->on('product_lists')
                ->onDelete('cascade');

            $table->unsignedInteger('id_cat');
            $table->foreign('id_cat')
            ->references('id')
            ->on('product_cats')
            ->onDelete('cascade');

            $table->string('photo');
            $table->string('name');
            $table->string('desc');
            $table->string('content');
            $table->integer('regular_price');
            $table->integer('discount');
            $table->integer('sale_price');
            $table->integer('stock');
            $table->json('status');
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
        Schema::dropIfExists('products');
    }
}
