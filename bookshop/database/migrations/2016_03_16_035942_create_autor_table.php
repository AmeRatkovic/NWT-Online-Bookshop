<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->increments('idAutor');
            $table->string('Ime',20);
            $table->string('Prezime',20);
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
        Schema::drop('autors');
    }
}
