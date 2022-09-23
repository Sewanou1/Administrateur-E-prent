<?php

use App\Http\Controllers\admin\TypeImpression;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashbord.index');
})->name('accueil');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/typeImpression', TypeImpression::class);

