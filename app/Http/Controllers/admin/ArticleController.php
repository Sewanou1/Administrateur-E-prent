<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Format;
use App\Models\SupportImpression;
use App\Models\TypeImpression;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function getFileExt($file)
    {
        return collect(explode(".", $file->getClientOriginalName()))->last();
    }
    public function notImage($file)
    {
        return ($this->getFileExt($file) != 'png' && $this->getFileExt($file) != 'jpg' && $this->getFileExt($file) != 'jpeg' && $this->getFileExt($file) != 'webp');
    }
    public function imageName($file, $id)
    {
        return "articlePic-" .
            $id . "." . $this->getFileExt($file);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title="Liste des différents articles";
        $articles=Article::all();
        return view('article.index',compact('title','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="Creation d'un nouvel article";
        $typeImpressions= TypeImpression::all();
        $formats= Format::all();
        $supporImpressions= SupportImpression::all();
        return view('article.create',compact('title','typeImpressions','formats','supporImpressions'));
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
        $article = Article::create($request->all());
        if ($request->file("photo")) {
            $file = $request->file('photo');

            if ($this->notImage($file))
                return back()->with('error', 'Sélectionnez une image');


            $filename = $this->imageName($file, $article->id);
            $file->move(public_path(StorageController::$PATH_IMAGES . 'articles'), $filename);
            $article->update(["photo" => $filename]);
        }
        return redirect()->route('article.index')->with('success', "Crée avec succès");
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
        $title="Modification d'un format";
        $article=Article::find($id);
        $typeImpressions=TypeImpression::all();
        $formats= Format::all();
        return view('article.edit',compact('title','article','typeImpressions','formats'));
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
        $article = Article::find($id);
        $article->update($request->all());
        if ($request->file("photo")) {
            $file = $request->file('photo');

            if ($this->notImage($file))
                return back()->with('error', 'Sélectionnez une image');


            $filename = $this->imageName($file, $article->id);
            $file->move(public_path(StorageController::$PATH_IMAGES . 'articles'), $filename);
            $article->update(["photo" => $filename]);
        }
        return redirect()->route('article.index')->with('success', "Modifiée avec succès");
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
        Article::destroy($id);
        return redirect()->route('format.index')->with('info', "Supprimé avec succès");
    }
}
