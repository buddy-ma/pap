<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->integer('theme_id')->default(1);
            $table->string('picture', 255)->nullable();
            $table->string('background', 255)->default('bg.png');
            $table->string('title', 255);
            $table->string('subtitle', 255)->nullable();
            $table->string('button', 50)->nullable();
            $table->tinyInteger('is_order', 1)->default(0);
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
        Schema::dropIfExists('headers');
    }
}