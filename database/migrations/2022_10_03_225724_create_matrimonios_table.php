<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idHombre');
            $table->unsignedBigInteger('idMujer');
            $table->foreign('idHombre')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('idMujer')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('matrimonios');
    }
}
