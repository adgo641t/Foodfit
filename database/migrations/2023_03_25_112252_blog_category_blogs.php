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
        Schema::create('category_blogs_post', function (Blueprint $table) {
            $table->foreignId('category_blogs_id')->references('id')->on('category_blogs');
            $table->foreignId('category_blogs_id_2')->references('id')->on('category_blogs');
            $table->foreignId('category_blogs_id_3')->references('id')->on('category_blogs');
            $table->foreignId('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
