<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        User::create(array('Ime'=>'Amer',
            'Prezime'=>'Ratkovic',
            'email'=>'admin@localhost.com',
            'username'=>'amer',
            'password'=>Hash::make('password'),
            'Tip'=>'Admin'));
    }
}
