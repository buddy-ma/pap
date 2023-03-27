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
            $table->foreignId('proprietaire_id')->constrained();
            $table->foreignId('product_category_id')->constrained();
            $table->foreignId('product_type_id')->constrained();
            $table->tinyInteger('is_dispo')->default(1);
            $table->tinyInteger('is_new')->default(1);
            
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('video_link')->nullable();
            $table->string('vr_link')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->double('surface');
            $table->string('unite_surface');
            $table->integer('surface_habitable')->nullable();
            $table->integer('surface_terrain')->nullable();
            $table->integer('nbr_pieces');
            $table->integer('nbr_chambres')->nullable();
            $table->tinyInteger('has_balcon_terrace')->default(0);
            $table->tinyInteger('has_garage_parking')->default(0);
            $table->tinyInteger('has_piscine')->default(0);
            $table->tinyInteger('has_cave')->default(0);
            $table->tinyInteger('has_access_handicape')->default(0);
            $table->double('prix');
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