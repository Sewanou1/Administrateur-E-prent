<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function GetDevis(Request $request){
        $sommes=0;
        $articles= Article::with('typeImpression')->get();
        // $articles= Article::where('libelle',$request["type_impression"])->first();
        foreach($articles as $article){
         if($request["t"]==$article->typeImpression->libelle){
            $PrixCom= $article->prix;
            $Q=$request["q"];
            $sommes+= $Q*$PrixCom;
            }
         }
        return response()->json(['devis'=>$sommes]);
    }
}
