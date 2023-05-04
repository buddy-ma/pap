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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('proprietaire_id')->constrained();
            $table->foreignId('product_category_id')->constrained();
            $table->foreignId('product_type_id')->constrained();
            $table->tinyInteger('is_dispo')->default(1);
            $table->string('disponibilite')->nullable();
            $table->tinyInteger('is_new')->default(1);
            $table->string('reference');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('extras')->nullable();
            $table->string('video_link')->nullable();
            $table->string('vr_link')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('ville')->nullable();
            $table->string('quartier')->nullable();
            $table->string('address')->nullable();
            $table->double('surface')->default(0);
            $table->string('unite_surface');
            $table->integer('surface_habitable')->nullable();
            $table->integer('surface_terrain')->nullable();
            $table->double('prix');
            $table->string('prix_by')->default('fix');
            $table->integer('nbr_salons')->default(0);
            $table->integer('nbr_chambres')->default(0);
            $table->integer('vues')->default(0);
            $table->integer('vues_phone')->default(0);
            $table->tinyInteger('status')->default(1);
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
