<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_room_details', function (Blueprint $table) {
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
        Schema::dropIfExists('rent_room_details');
    }
}
