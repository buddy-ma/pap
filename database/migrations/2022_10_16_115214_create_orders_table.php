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
            $table->id();
            $table->foreignId('product_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->onUpdate('cascade')->onDelete('cascade')->default(1);
            $table->string('size', 5);
            $table->integer('faces');
            $table->string('extra', 255);
            $table->double('subtotal');
            $table->double('total');
            $table->string('fullname', 50);
            $table->string('phone', 20);
            $table->string('email', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('message', 255)->nullable();
            $table->string('image', 255)->nullable();
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