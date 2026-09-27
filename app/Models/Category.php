<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
       'id',
       'nom',
       'description',
    ];
    public function livre()
    {
        return $this->hasMany(Livre::class , 'fk_category');
    }

}
