<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_room_details', function (Blueprint $table) {
            $table->unsignedInteger('id_ReceiveRoom');
            $table->foreign('id_ReceiveRoom')->references('id_ReceiveRoom')->on('receive_rooms');
            $table->unsignedInteger('id_Room');
            $table->foreign('id_Room')->references('id_Room')->on('rooms');
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->date('receive_date');
            $table->date('estimated_date');
            $table->date('actual_date');
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
        Schema::dropIfExists('receive_room_details');
    }
}
