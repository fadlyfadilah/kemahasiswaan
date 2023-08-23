<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tahunangkatan');
            $table->string('semester')->nullable();
            $table->string('frs')->nullable();
            $table->integer('sks')->nullable();
            $table->string('ipsfile')->nullable();
            $table->string('ips')->nullable();
            $table->timestamps();
        });
    }
}