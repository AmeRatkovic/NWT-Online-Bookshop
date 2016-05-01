<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('Ime',20);
            $table->string('Prezime',20);
            $table->string('email',30)->unique();
            $table->string('username',20);
            $table->string('password',200);
            $table->boolean('potvrdjeno')->default(0);
            $table->string('konfirmacijski_kod')->nullable();
            $table->string('Tip',13);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
