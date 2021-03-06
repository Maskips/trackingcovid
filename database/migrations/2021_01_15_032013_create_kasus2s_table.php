<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasus2sTable extends Migration
{
    public function up()
    {
        Schema::create('kasus2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rw');
            $table->foreign('id_rw')->references('id')
                  ->on('rws')->onDelete('cascade');
            $table->integer('jpositif');
            $table->integer('jmeninggal');
            $table->integer('jsembuh');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kasus2s');
    }
}
