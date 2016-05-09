<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViseizdavacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viseizdavacs', function (Blueprint $table) {
            $table->integer('knjigaid')->unsigned()->default(0);
            $table->integer('izdavacid')->unsigned()->default(0);
            $table->foreign('knjigaid')->references('idKnjiga')->on('Knjiga');
            $table->foreign('izdavacid')->references('idIzdavac')->on('Izdavac');
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
        Schema::drop('viseizdavacs');
    }
}
