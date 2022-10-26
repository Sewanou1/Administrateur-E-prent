<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\ArticleCommande;
use App\Models\Commande;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CommandeController extends Controller
{

    public function upload(Request $request){


        if($request->hasFile('file')){
            $file= $request->file('file');
            $fileName = Str::random(32).".".$file->getClientOriginalExtension();
            // $path="storage/".$fileName;
            // $file->move('files/', $fileName);
            // $file->path();
            $path = $file->storeAs('Files',$fileName);
            return response()->json([
                "message" => "Upload successfully.",
                "path"=> $path
            ]);

        }
            return response()->json("File not found");
    }

    //
    public function registerCommande(Request $request){
        $commande= new Commande ;
        $commande->nom= $request->nom;
        $commande->prenom= $request->prenom;
        $commande->email= $request->email;
        $commande->adresse= $request->adresse;
        $commande->date_commande= Carbon::now();
        $commande->delais= $request->delais;
        $commande->type_livraison= $request->type_livraison;
        $commande->reference= str_pad(random_int(1,9999), 6, '0', STR_PAD_LEFT);
        $commande->montant= $request->montant;
        if($request->type_livraison=="A livrer à la maison"){
            $commande->prix_livraison= 500;
        } else {
            $commande->prix_livraison= 0;
        }
        $commande->nombre_article= $request->nombre_article;
        $commande->montant_total= $request->montant + $commande->prix_livraison;
        $commande->centre_impression_id= 1;
        $commande->save();
        $articles_commande = $request->articles_commande;
        foreach ($articles_commande as $item) {
            $commande->articles_commande()->create($item);
        }

        return response()->json(['order'=>$commande]);
    }
}
