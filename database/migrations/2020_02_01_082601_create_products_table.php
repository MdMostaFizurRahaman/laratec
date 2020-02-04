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
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('name')->unique()->index('product_name_indx');
            $table->string('code')->unique()->index('product_code_indx');
            $table->double('price')->nullable();
            $table->longText('description')->nullable();
            $table->longText('features')->nullable();
            $table->longText('configuration')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('accessories')->nullable();
            $table->longText('peripheral')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
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