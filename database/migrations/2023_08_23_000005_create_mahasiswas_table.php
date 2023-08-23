<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('nik');
            $table->string('ttl');
            $table->longText('alamat');
            $table->string('email');
            $table->string('beasiswa')->nullable();
            $table->string('nohp')->nullable();
            $table->string('nama_ortu');
            $table->string('noortu')->nullable();
            $table->string('poto')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }
}