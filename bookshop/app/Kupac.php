<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupac extends Model
{
    protected $primaryKey = 'idKupac';

    protected $fillable = [
        'Adresa', 'ZipCode', 'Grad','Drzava','BrojTelefona',
    ];
}
