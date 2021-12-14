<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nopol');
            $table->integer('id_supir');
            $table->string('bagian');
            $table->integer('jumlah_penumpang');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('jenis_kendaraan');
            $table->string('tujuan');
            $table->string('keperluan');
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
        Schema::dropIfExists('peminjaman');
    }
}
