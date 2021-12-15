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
            $table->bigInteger('jenis_id')->unsigned();
            $table->string('tujuan');
            $table->string('keperluan');
            $table->bigInteger('mobil_id')->nullable()->unsigned();
            $table->bigInteger('supir_id')->nullable()->unsigned();
            $table->integer('status');
            $table->bigInteger('user_id')->unsigned();
            $table->text('catatan')->nullable();
            $table->foreign('jenis_id')->references('id')->on('jenis_kendaraan'); 
            $table->foreign('mobil_id')->references('id')->on('mobil'); 
            $table->foreign('supir_id')->references('id')->on('supir'); 
            $table->foreign('user_id')->references('id')->on('users'); 
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
