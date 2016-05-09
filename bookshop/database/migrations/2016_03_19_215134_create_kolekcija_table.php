<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolekcijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolekcijas', function (Blueprint $table) {
            $table->increments('idKolekcija');
            $table->integer('idKnjiga1');
            $table->integer('idKnjiga2')->nullable();
            $table->integer('idKnjiga3')->nullable();
            $table->integer('idKnjiga4')->nullable();
            $table->integer('idKnjiga5')->nullable();
            $table->double('Cijena');
            $table->double('Popust');
            $table->foreign('narudzbaid')->references('idNaruzba')->on('Narudzba');
            $table->integer('narudzbaid')->unsigned()->default(0);
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');
            $table->integer('knjigaid')->unsigned()->default(0);

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
        Schema::drop('kolekcijas');
    }
}
