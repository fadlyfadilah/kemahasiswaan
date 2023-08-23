<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguruanTinggiProdiPivotTable extends Migration
{
    public function up()
    {
        Schema::create('perguruan_tinggi_prodi', function (Blueprint $table) {
            $table->unsignedBigInteger('perguruan_tinggi_id');
            $table->foreign('perguruan_tinggi_id', 'perguruan_tinggi_id_fk_8911864')->references('id')->on('perguruan_tinggis')->onDelete('cascade');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id', 'prodi_id_fk_8911864')->references('id')->on('prodis')->onDelete('cascade');
        });
    }
}