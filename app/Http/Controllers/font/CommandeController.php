<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\ArticleCommande;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CommandeController extends Controller
{
    //
    public function registerCommande(Request $request){
       $articleCommande= ArticleCommande::create($request->all());
       if(!$articleCommande){
        return "pas d'insertion" ;
        // back()->with('error',"Une erreur s'est produite")
       }else{
        return "insertion ok";
        // back()->with('success',"article sauvegardée avec succès")
       }

    }
}
