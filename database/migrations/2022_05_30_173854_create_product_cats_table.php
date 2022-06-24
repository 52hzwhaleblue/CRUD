<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cats', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_list');
            $table->foreign('id_list')
                ->references('id')
                ->on('product_lists')
                ->onDelete('cascade');

            $table->string('photo');
            $table->string('name');
            $table->string('desc');
            $table->string('content');
            $table->json('status')->nullable();
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
        Schema::dropIfExists('product_cats');
    }
}
