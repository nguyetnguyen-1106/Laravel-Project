<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_rooms', function (Blueprint $table) {
            $table->increments('id_ReceiveRoom');
            $table->unsignedInteger('id_RentRoom');
            $table->foreign('id_RentRoom')->references('id_RentRoom')->on('rent_rooms');
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('receive_rooms');
    }
}
