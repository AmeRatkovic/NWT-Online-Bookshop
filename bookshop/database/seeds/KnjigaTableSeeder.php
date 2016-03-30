<?php

use Illuminate\Database\Seeder;
use App\Knjiga;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class KnjigaTableSeeder extends Seeder
{
    public function run()
    {
        Knjiga::create(array(
            'Naslov'=>'Tehnike programiranja',
            'Izdavac'=>'Svjetlost',
            'Datum'=>'20.11.2010',
            'Kategorija'=>'Programiranje',
            'ISBN'=>'123456',
            'Opis'=>'Uvod u programiranje sa C++',
            'Slika'=>'Blob',
            'Cijena'=>25.00,
            'BrojStrana'=>356,
            'Popust'=>0.0));
    }
}