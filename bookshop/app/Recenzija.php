<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recenzija extends Model
{
    protected $fillable = [
        'Ocjena', 'Komentar', 'Datum',
    ];
}
