<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisenarudzbaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visenarudzba', function (Blueprint $table) {
            $table->integer('narudzbaid')->unsigned()->default(0);
            $table->integer('knjigaid')->unsigned()->default(0);
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');
            $table->foreign('narudzbaid')->references('idNarudzba')->on('Narudzba');
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
        Schema::drop('visenarudzba');
    }
}
