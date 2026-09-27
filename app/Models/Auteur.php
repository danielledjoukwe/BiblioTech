<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    //
    protected $fillable = [
        'id',
        'nom',
        'bibliographie',
        'nationalite',
    ];

    public function livre()
    {
        return $this->hasMany(Livre::class , 'fk_auteur');
    }

}
