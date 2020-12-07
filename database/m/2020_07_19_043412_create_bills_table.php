<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id_bill');
            $table->unsignedInteger('id_Emp');
            $table->foreign('id_Emp')->references('id_Emp')->on('employees');
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->unsignedInteger('id_ReceiveRoom');
            $table->foreign('id_ReceiveRoom')->references('id_ReceiveRoom')->on('receive_rooms');
            $table->date('dateOfPayment');
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
        Schema::dropIfExists('bills');
    }
}
