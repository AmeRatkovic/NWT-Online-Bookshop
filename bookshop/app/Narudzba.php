<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{
    protected $fillable = [
        'Kolicina', 'TotalCijena', 'Datum','POpust',
    ];
}
public function GetKnjiga(){
    return $this->belongsTo('Knjiga','knjigaid');
}

public function GetOrders(){

    return $this->belongsToMany('Knjiga','visenarudzba','narudzbaid','knjigaid');
}