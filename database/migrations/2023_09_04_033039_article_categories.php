<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('articles_id');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
};
