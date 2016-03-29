<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    protected $primaryKey = 'idKnjiga';

    protected $fillable = [
        'Naslov', 'Izdavac', 'Datum','Kategorija','ISBN','Opis','Slika','Cijena','BrojStrana','Popust',
    ];

    public function hasWritten(){
    return $this->hasMany('Autor','autorid');
}
public function hasRead(){
    return $this->belongsToMany('Autor','viseautor','knjigaid','autorid');
}

}
