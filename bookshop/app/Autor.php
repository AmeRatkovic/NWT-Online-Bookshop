<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'Ime', 'Prezime',
    ];

public function GetKnjiga(){
return $this->belongsTo('Knjiga','knjigaid');
}

public function GetReaaders(){

    return $this->belongsToMany('Knjiga','viseautor','autorid','knjigaid');
}
}
