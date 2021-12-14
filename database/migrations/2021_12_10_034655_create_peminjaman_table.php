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
            $table->integer('keperluan_id');
            $table->string('nama');
            $table->string('bagian');
            $table->integer('jumlah_penumpang');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('jenis_id');
            $table->string('tujuan');
            $table->string('keperluan');
            $table->integer('mobil_id')->nullable();
            $table->integer('supir_id')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->text('catatan')->nullable();
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
