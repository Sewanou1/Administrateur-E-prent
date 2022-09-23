<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\TypeImpression as ModelsTypeImpression;
use Illuminate\Http\Request;

class TypeImpression extends Controller
{
    public function invalid(Request $request)
    {
        return trim($request["libelle"]) == "";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title="Liste des types d'impression";
        $typeImpressions= ModelsTypeImpression::all();
        return view('typeImpression.index',compact('title','typeImpressions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title= "Nouveau type d'impresson";
        return view('typeImpression.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($this->invalid($request))
        return back()->with('error','Information invalide');
        ModelsTypeImpression::create($request->all());
        return redirect()->route('typeImpression.index')->with('Success','Crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title="Mmodification d'un type d'impression";
        $typeImpression= ModelsTypeImpression::find($id);
        return view('typeImpression.edit',compact('title','typeImpression'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $condition = false;
        // if($condition)
        //     return back()->with('error', "Un ou plusieurs instituts appartiennent à ce domaine !");

        $article = Article::where("type_impression_id",$id)->get();
        if(count($article)>0)
            return back()->with('error', "Un ou plusieurs article appartiennent à ce type !");
        ModelsTypeImpression::destroy($id);
        return redirect()->route('type_instituts.index')->with('info', "Supprimé avec succès");

    }
}
