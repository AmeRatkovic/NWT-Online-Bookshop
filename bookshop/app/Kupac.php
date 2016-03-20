<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupac extends Model
{
    protected $fillable = [
        'Adresa', 'ZipCode', 'Grad','Drzava','BrojTelefona',
    ];
}
