<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nopol')->unique();
            $table->bigInteger('jenis_id')->unsigned(); 
            $table->bigInteger('unit_id')->unsigned(); 
            $table->integer('status')->default('1');
            $table->foreign('jenis_id')->references('id')->on('jenis_kendaraan'); 
            $table->foreign('unit_id')->references('id')->on('unit'); 
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
        Schema::dropIfExists('mobil');
    }
}
