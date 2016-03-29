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
        'Ime', 'Prezime', 'Email','Username','Password','Tip',
    ];
    public static $rules = [
        'Ime'     => 'required',


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
