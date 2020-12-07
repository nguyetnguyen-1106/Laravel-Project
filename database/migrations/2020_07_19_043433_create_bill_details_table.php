<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id_bill')->on('bills');
            $table->unsignedInteger('id_Room');
            $table->foreign('id_Room')->references('id_Room')->on('rooms');
            $table->unsignedInteger('id_Service');
            $table->foreign('id_Service')->references('id_Service')->on('services');
            $table->double('room_charge');
            $table->double('service_charge');
            $table->integer('discount');
            $table->integer('day_number');
            $table->double('totalPrice');
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
        Schema::dropIfExists('bill_details');
    }
}
