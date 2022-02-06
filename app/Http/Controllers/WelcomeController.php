<?php

namespace App\Http\Controllers;

use App\Models\Serie;

class WelcomeController extends Controller
{
    
    function show() {

        //On récupère les séries sur la base de donnée et on trie par date de sortie
        $series = Serie::orderby('premiere', 'desc')->take(5)->get();
        
        // On affiche la page d'accueil
        return view('welcome', [
            'series' => $series
        ]);
    }


}
