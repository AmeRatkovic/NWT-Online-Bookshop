<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skladiste extends Model
{
    protected $fillable = [
        'idKnjiga','Kolicina',
    ];
}
