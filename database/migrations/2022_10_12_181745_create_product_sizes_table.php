<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title', 255);
            $table->string('detail', 255)->nullable();
            $table->string('extras', 255)->nullable();
            $table->double('price1');
            $table->double('price2')->nullable();
            $table->double('price3')->nullable();
            $table->double('packaging')->nullable();
            $table->double('livraison')->nullable();

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
        Schema::dropIfExists('product_sizes');
    }
}