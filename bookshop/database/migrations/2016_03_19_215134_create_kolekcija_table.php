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
        Schema::create('kolekcija', function (Blueprint $table) {
            $table->increments('idKolekcija');
            $table->integer('idKnjiga1');
            $table->integer('idKnjiga2');
            $table->integer('idKnjiga3');
            $table->integer('idKnjiga4');
            $table->integer('idKnjiga5');
            $table->double('Cijena');
            $table->double('Popust')->nullable();
            $table->integer('idNaruzba');
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
        Schema::drop('kolekcija');
    }
}
