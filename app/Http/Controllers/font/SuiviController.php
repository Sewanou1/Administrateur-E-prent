<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class SuiviController extends Controller
{
    //
    public function suiviCom(Request $request){
        $commande=Commande::where('reference',$request->ref)->first();
        if(!$commande){
            return response()->json(['etatcomm'=>'inexistante']);
        }else {
            $etatCom=$commande->etat;
                if($etatCom==0)
                    return response()->json(['etatcomm'=>'en cours de traitement']);
                else
                    return response()->json(['etatcomm'=>'  déjà traitée']);
        }
    }
}
