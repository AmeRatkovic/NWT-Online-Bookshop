<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecenzijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recenzijas', function (Blueprint $table) {
            $table->increments('idRecnija');
            $table->integer('Ocjena');
            //$table->string('Izdavac',25);
            $table->string('Komentar',500);
            $table->string('Datum',20);
       /*Dodati forign key*/
            $table->integer ('userid')->unsigned()->default(0);
            $table->integer ('knjigaid')->unisgned()->default(0);
            $table->foreign ('userid')->references('IdUser')->on('User');
            $table->foreign ('knjigaid')->references ('IdKnjiga')->on ('Knjiga');
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
        Schema::drop('recenzija');
    }
}
