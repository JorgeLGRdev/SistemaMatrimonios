<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNombreHToMatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matrimonios', function (Blueprint $table) {
            //
            $table->string('nombreH')->nullable()->after('idMujer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matrimonios', function (Blueprint $table) {
            //
            $table->dropColumn('nombreH');
        });
    }
}
