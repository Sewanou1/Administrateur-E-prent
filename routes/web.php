<?php

use App\Http\Controllers\admin\ArticleCommandeController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\AvisController;
use App\Http\Controllers\admin\CentreImpressionController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CommandeController;
use App\Http\Controllers\admin\FactureController;
use App\Http\Controllers\admin\FormatController;
use App\Http\Controllers\admin\SupportImpressionController;
use App\Http\Controllers\admin\TypeImpression;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route("login");
} )->name("logout");

Route::get('/', function () {
    return view('dashbord.index');
})->name('accueil');
Route::get('/admin', [DashboardController::class,'index'])->middleware(['auth'])->name('admin.index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/typeImpression', TypeImpression::class);
Route::resource('/format', FormatController::class);
Route::resource('/article', ArticleController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/avis',AvisController::class);
Route::resource('/commandes',CommandeController::class);
Route::resource('/detailCommande',ArticleCommandeController::class);
Route::resource('/facture',FactureController::class);
Route::resource('/centreImpression',CentreImpressionController::class);
Route::resource('/supports',SupportImpressionController::class);

