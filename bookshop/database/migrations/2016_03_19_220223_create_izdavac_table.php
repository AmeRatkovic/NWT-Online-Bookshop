<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzdavacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izdavac', function (Blueprint $table) {
            $table->increments('idIzdavac');
            $table->string('Ime',45);
            $table->string('Lokacija',45);
            $table->string('Email',45)->unique();
            $table->string('Telefon',45);
            $table->integer('knjigaid')->unsigned()->default(0);
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');
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
        Schema::drop('izdavac');
    }
}
