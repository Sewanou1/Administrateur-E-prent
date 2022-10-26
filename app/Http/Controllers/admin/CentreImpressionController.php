<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CentreImpression;
use Illuminate\Http\Request;

class CentreImpressionController extends Controller
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
        return "centreImpressionPic-" .
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
        $title="Liste des centres d'impressions";
        $centreImpressions=CentreImpression::all();
        return view('centreImpression.index',compact('title','centreImpressions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="Création d'un nouveau centre d'impression";
        return view('centreImpression.create',compact('title'));
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
        $centreImpression = CentreImpression::create($request->all());
        if ($request->file("photo")) {
            $file = $request->file('photo');

            if ($this->notImage($file))
                return back()->with('error', 'Sélectionnez une image');


            $filename = $this->imageName($file, $centreImpression->id);
            $file->move(public_path(StorageController::$PATH_IMAGES . '$centreImpression'), $filename);
            $centreImpression->update(["photo" => $filename]);
        }
        return redirect()->route('centreImpression.index')->with('success', "Crée avec succès");
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
        CentreImpression::destroy($id);
        return redirect()->route('centreImpression.index')->with('info', "Supprimé avec succès");
    }
}
