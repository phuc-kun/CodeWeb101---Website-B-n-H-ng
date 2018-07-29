<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name', 100);
            $table->Integer('id_type')->nullable();
            $table->text('description');
            $table->float('unit_price', 8, 2)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('unit', 100)->nullable();
            $table->tinyInteger('new')->default('0');
            $table->timestamps();
            $table->foreign('id_type')->references('id')->on('type_product');
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
