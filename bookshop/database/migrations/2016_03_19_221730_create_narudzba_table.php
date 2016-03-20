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
        Schema::create('narudzba', function (Blueprint $table) {
            $table->increments('idNarudzba');
            $table->integer('Kolicina');
            $table->double('TotalCijena')->nullable();
            $table->string('Datum',20);
            $table->double('Popust')->nullable();
            /*Dodati forign key*/
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
