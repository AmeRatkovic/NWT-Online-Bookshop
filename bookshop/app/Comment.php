<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'komentar','idUser','idKnjiga','brojKomentara'];
}
