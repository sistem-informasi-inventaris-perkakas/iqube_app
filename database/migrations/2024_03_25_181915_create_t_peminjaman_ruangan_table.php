<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanRuanganTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman_ruangan', function (Blueprint $table) {
            $table->id('peminjaman_ruangan_id');
            $table->string('nim');
            $table->unsignedBigInteger('room_id');
            $table->dateTime('date_borrow');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status')->default('Not Complete');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman_ruangan');
    }
}