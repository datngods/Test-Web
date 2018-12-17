<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('productId');
            $table->string('name');
            $table->integer('size');
            $table->string('color');
            $table->integer('quantity');
            $table->string('description');
            $table->bigInteger('price');
            $table->bigInteger('salePrice');
            $table->integer('categoryId');
            $table->integer('firmId');
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
        Schema::dropIfExists('product');
    }
}
