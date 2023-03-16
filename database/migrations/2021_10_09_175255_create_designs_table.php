<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('design_category_id')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('type');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('client')->nullable();
            $table->string('image');
            $table->date('date')->nullable();
            $table->string('link')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('sort')->nullable();
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
        Schema::dropIfExists('designs');
    }
}