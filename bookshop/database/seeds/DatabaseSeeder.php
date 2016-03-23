<?php

use Illuminate\Database\Seeder;
use App\Autor;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::truncate();
        factory (App\Autor::class,10)->create();
        $this->call(UserTableSeeder::class);
       // $this->call(AutorTableSeeder::class);
        $this->call(KnjigaTableSeeder::class);
        $this->call(SkladisteTableSeeder::class);
    }
}
