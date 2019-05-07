<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image_small');
            $table->string('image_big');
            $table->string('content_full');
            $table->string('content_des');
            $table->string('link');
            $table->string('link_demo');
            $table->string('file_size');
            $table->string('type');
            $table->string('price');
            $table->string('saleoff');
            $table->string('cartegory');
            $table->unsignedInteger('user_id');
            $table->integer('status');
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
        Schema::dropIfExists('items');
    }
}
