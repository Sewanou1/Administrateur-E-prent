<?php

use App\Http\Controllers\font\CommandeController;
use App\Http\Controllers\font\DocumentController;
use App\Http\Controllers\font\OrderController;
use App\Http\Controllers\font\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('/deconnexion', [UserController::class,'logout']);
});

Route::post('/inscription', [UserController::class,'register']);
Route::post('/connexion', [UserController::class,'login']);
Route::post('/commander',[CommandeController::class,'registerCommande']);
Route::post('/uploadFile',[DocumentController::class,'upload']);
Route::post('/GetDevis',[OrderController::class,'GetDevis']);
Route::post('/commander',[CommandeController::class,'registerCommande']);
