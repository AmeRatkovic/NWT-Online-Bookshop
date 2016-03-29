<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kolekcija extends Model
{
    protected $primaryKey = 'idKolekcija';

    protected $fillable = [
        'idKnjiga1', 'idKnjiga2', 'idKnjiga3','idKnjiga4','idKnjiga5','Cijena','Popust',
    ];
}
