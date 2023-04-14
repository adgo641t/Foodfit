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
            $table->id()->cascadeOnDelete();
            $table->string('title');
            $table->text('description', 16000);
            $table->foreignId('category_id')->references('id')->on('category_blogs')->cascadeOnDelete();
            $table->foreignId('category_id_2')->references('id')->on('category_blogs')->cascadeOnDelete();
            $table->foreignId('category_id_3')->references('id')->on('category_blogs')->cascadeOnDelete();
            $table->foreignId('creator')->references('id')->on('users');
           
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
