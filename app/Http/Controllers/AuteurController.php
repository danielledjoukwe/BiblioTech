<?php

namespace App\Http\Controllers;
use App\Models\Auteur;

use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //
     public function store(Request $request){
        Auteur::create([
        'nom' =>$request->nom,
        'bibliographie' =>$request->bibliographie,
        'nationalité' =>$request->nationalité,
        ]);
    }
}
