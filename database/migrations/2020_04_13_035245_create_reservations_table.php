<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('reserve_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('room_type');
            $table->smallInteger('room_numbers');
            $table->unsignedBigInteger('user_reserve');
            $table->foreign('user_reserve')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
