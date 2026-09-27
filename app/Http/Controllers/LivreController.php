<?php

namespace App\Http\Controllers;


use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    //
    public function store(Request $request){
        Livre::create([
        'titre' => $request->titre,
        'description' =>$request->description,
        'annee_publication' =>$request->annee_publication,
        'statut' =>$request->statut,
        ]);
    }
}
