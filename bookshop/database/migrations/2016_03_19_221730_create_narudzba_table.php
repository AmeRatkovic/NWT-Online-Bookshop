<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNarudzbaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narudzbas', function (Blueprint $table) {
            $table->increments('idNarudzba');
            $table->integer('Kolicina');
            $table->double('TotalCijena')->nullable();
            $table->string('Datum',20);
            $table->double('Popust')->nullable();
            /*Dodati forign key*/
            $table->integer('knjigaid')->unsigned()->default(0);
            $table->integer('kupacid')->unsigned()->default(0);
            $table->integer('kolekcijaid')->unsigned()->default(0);
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');
            $table->foreign('kupacid')->references('idKupac')->on('Kupac');
            $table->foreign('kolekcijaid')->references('idKolekcija')->on('Kolekcija');
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
        Schema::drop('narudzba');
    }
}
