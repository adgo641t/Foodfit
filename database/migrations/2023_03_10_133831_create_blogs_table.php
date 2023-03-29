<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('category_id')->references('id')->on('category_blogs');
            $table->foreignId('category_id_2')->references('id')->on('category_blogs');
            $table->foreignId('category_id_3')->references('id')->on('category_blogs');

            $table->string('creator');
            $table->string('image');
            //$table->foreignId('category_id')->references('id')->on('category_blogs');
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
        Schema::dropIfExists('blogs');
    }
};
