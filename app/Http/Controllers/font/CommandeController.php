<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\ArticleCommande;
use App\Models\Commande;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CommandeController extends Controller
{

    public function upload(Request $request){


        if($request->hasFile('file')){
            $file= $request->file('file');
            $fileName = $file->getClientOriginalName();
            // $path="storage/".$fileName;
            // $file->move($path,file_get_contents($file));
            $file->storeAs('Files',$fileName);
            return response()->json("Upload successfully.");

        }
            return response()->json("File not found");
    }

    //
    public function registerCommande(Request $request){
        $commande= new Commande ;
        $commande->nom= "ESSESSINOU";
        $commande->prenom= "Damien";
        $commande->email= "daes@gmail.com";
        $commande->adresse= "Tankpè parana";
        $commande->date_commande= "2022-09-21";
        $commande->delais= "2022-09-25";
        $commande->type_livraison= "Livraison";
        $commande->reference= "HJD2S4";
        $commande->montant= "85";
        $commande->prix_livraison= "10";
        $commande->nombre_article= "1";
        $commande->montant_total= "95";
        $commande->centre_impression_id= "2";
        $commande->save();
        $idCommande= Commande::all()->last()->id;
        $request['commande_id']=$idCommande;
        // return $request->all();
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
