<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_deposit')->unique();
            $table->integer('item_id');
            $table->integer('user_id');
            $table->string('code_bank');
            $table->string('sender_name');
            $table->string('phone');
            $table->string('acc_bank');
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
        Schema::dropIfExists('trans');
    }
}
