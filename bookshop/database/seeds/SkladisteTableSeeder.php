<?php

use Illuminate\Database\Seeder;
use App\Skladiste;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SkladisteTableSeeder extends Seeder
{
    public function run()
    {
        Skladiste::create(array('idKnjiga'=>1,'Kolicina'=>43));
    }
}
