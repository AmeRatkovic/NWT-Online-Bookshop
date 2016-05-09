<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKupacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupacs', function (Blueprint $table) {
            $table->increments('idKupac');
            $table->string('Adresa',40);
            $table->string('ZipCode',10);
            $table->string('Grad',25);
            $table->string('Drzava',30);
            $table->string('BrojTelefona',15);
            /*Dodati forign key IdUser*/
            $table->integer ('userid')->unsigned()->defoult(0);
            $table->foreign('userid')->references('idUser')->on('User');
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
        Schema::drop('kupacs');
    }
}
