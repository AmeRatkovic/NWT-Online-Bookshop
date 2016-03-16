<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnjigaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjigas', function (Blueprint $table) {
            $table->increments('idKnjiga');
            $table->string('Naslov',45);
            $table->string('Izdavac',25);
            $table->string('Kategorija',25);
            $table->string('ISBN',13)->nullable();
            $table->string('Opis',700);
            $table->string('Slika',200)->nullable();
            $table->double('Cijena');
            $table->integer('BrojStrana');
            $table->double('Popust')->nullable();
            $table->integer('autorid')->unsigned()->default(0);
            $table->foreign('autorid')->references('idAutor')->on('Autor');
            $table->string('Datum',20);
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
        Schema::drop('knjigas');
    }
}
