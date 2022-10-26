<?php

namespace App\Http\Controllers\font;

use App\Http\Controllers\Controller;
use App\Models\CentreImpression;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $clients= count(User::all());
        $centres=count(CentreImpression::all());
        return response()->json(['nbr_client'=>$clients,'nbr_centre'=>$centres]);
    }
}
    