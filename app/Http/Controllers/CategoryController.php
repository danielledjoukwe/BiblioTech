<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function store(Request $request){
      
      //règle de validation
      $message = [
        'nom.required' => 'nom obligatoire',
        'nom.unique' => 'le nom doit etre unique',
        'nom.string' => 'le nom doit etre une chaine de caractere',
        'nom.regex' => 'Le nom doit contenir uniquement des lettres et des espaces. ',
        'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        'descriptipon.regex' => 'La description contient des caractères non autorisés.',
        'descriptipon.string' => 'la description doit etre une chaine de caractere',
        'descriptipon.max' => 'la description ne doit pas dépasser 500 caracteres'
      ];
      $request->validate(
        [
          'nom' => 'required|string|unique:categories|regex:/^[A-Za-zÀ-ÿ\s]+$/|max:255',
          'description' => 'regex:/^[A-Za-zÀ-ÿ0-9\s.,!?\'"()-]+$/|string|max:500',
        ] , $message);
        Category::create([ 
          'nom' => $request->nom,
          'description' => $request->description,
        ]); 
        return redirect('/profile');
    }

}
