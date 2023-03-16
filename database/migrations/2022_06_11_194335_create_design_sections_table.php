<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('design_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('button')->nullable();
            $table->integer('sort_order')->nullable();

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
        Schema::dropIfExists('design_sections');
    }
}
