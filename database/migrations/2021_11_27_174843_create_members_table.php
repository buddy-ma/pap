<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            // $table->tinyInteger('category_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('title');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->text('social')->nullable();
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('avatar')->default(1);
            $table->string('password');
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
        Schema::dropIfExists('members');
    }
}
