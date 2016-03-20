<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izdavac extends Model
{
    protected $fillable = [
        'Ime', 'Lokacija', 'Email', 'Telefon',
    ];
}
public function GetKnjiga(){
    return $this->belongsTo('Knjiga','knjigaid');
}

public function GetIzdavaci(){

    return $this->belongsToMany('Knjiga','viseizdavac','izdavacid','knjigaid');
}