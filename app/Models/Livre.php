<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    //
    protected $fillable = [
        'id',
        'titre',
        'description',
        'annee_publication',
        'image',
        'statut',
        'fk_auteur',
        'fk_category',
    ];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class , 'fk_auteur');
    }

    public function catery()
    {
        return $this->belongsTo(Category::class , 'fk_category');
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
