<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViseautorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viseautors', function (Blueprint $table) {
            $table->integer('autorid')->unsigned()->default(0);
            $table->integer('knjigaid')->unsigned()->default(0);
            $table->foreign('autorid')->references('idAutor')->on('Autor');
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('viseautors');
    }
}
