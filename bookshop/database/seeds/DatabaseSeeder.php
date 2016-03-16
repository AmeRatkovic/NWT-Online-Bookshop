<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AutorTableSeeder::class);
        $this->call(KnjigaTableSeeder::class);
        $this->call(SkladisteTableSeeder::class);
    }
}
