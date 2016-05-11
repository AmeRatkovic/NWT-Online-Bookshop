<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   // protected $table ='users'
    protected $primaryKey = 'idUser';

    protected $fillable = [
        'Ime', 'Prezime', 'email','username','password','potvrdjeno','konfirmacijski_kod','Tip',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   
}
