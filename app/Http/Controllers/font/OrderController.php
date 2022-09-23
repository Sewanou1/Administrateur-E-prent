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
        $les_articles= Article::all();
        foreach($les_articles as $un_article){
            foreach($request->all() as $n_cart){
                if($n_cart['typeImpression']==$un_article->typeImpression->libelle && $n_cart['format']==$un_article->format->libelle){
                    $PrixCom= $un_article->prix;
                    $Q=$n_cart["quantite"];
                    $sommes+= $Q*$PrixCom;
                }
            }
        }
        return response()->json(['devis'=>$sommes]);
    }
}
