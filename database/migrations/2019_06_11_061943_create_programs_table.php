<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mustahiq_id');
            $table->string('nama_program');
            $table->string('jenis_amalan');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('mustahiq_id')->references('id')->on('mustahiqs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
