<?php

use Illuminate\Database\Seeder;
use App\Autor;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AutorTableSeeder extends Seeder
{
    public function run()
    {
        Autor::create(array('Ime'=>'Amer','Prezime'=>'Ratkovic'));

    }
}
