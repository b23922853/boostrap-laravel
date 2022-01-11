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
            $table->id();
            $table->string('name')->nullable();  //商品名稱
            $table->string('desc')->nullable();  //商品介紹
            $table->longText('images')->nullable();  //商品圖片的路徑
            $table->integer('price')->nullable(); //商品價格
            $table->integer('qty')->nullable(); //商品剩餘數量

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
