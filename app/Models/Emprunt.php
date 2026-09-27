<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    //
    protected $fillable = [
        'id',
        'date_emprunt',
        'date_retour',
        'id_user',
        'id_livre',
    ];

}
