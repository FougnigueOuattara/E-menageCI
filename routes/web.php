<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Retourne la page d'accueil
Route::get('/', function () {
    return view('welcome');
});



/// Personnels
Route::group(["prefix" => "personnels"], function(){

    /// Affiche la liste de tout le personnel inscrit
    Route::get('/personnels');

    /// Vitriers
    Route::group(["prefix" => "vitriers"], function(){

        /// Affiche la liste des vitriers
        Route::get('/',[\App\Http\Controllers\VitrierController::class,'index']);

        /// Affiche la page des vitriers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\VitrierController::class,'search']);

    });

    /// Peintres
    Route::group(["prefix" => "peintres"], function(){

        /// Affiche la liste des vitriers
        Route::get('/',[\App\Http\Controllers\PeintreController::class,'index']);

        /// Affiche la page des vitriers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\PeintreController::class,'search']);

    });

    /// Plombiers
    Route::group(["prefix" => "plombiers"], function(){

        /// Affiche la liste des plombiers
        Route::get('/',[\App\Http\Controllers\PlombierController::class,'index']);

        /// Affiche la page des plombiers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\PlombierController::class,'search']);

    });

    /// Ferronniers
    Route::group(["prefix" => "ferronniers"], function(){

        /// Affiche la liste des ferronniers
        Route::get('/',[\App\Http\Controllers\FerronnierController::class,'index']);

        /// Affiche la page des ferronniers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\FerronnierController::class,'search']);

    });

    /// Menuisiers
    Route::group(["prefix" => "menuisiers"], function(){

        /// Affiche la liste des menuisiers
        Route::get('/',[\App\Http\Controllers\MenuisierController::class,'index']);

        /// Affiche la page des menuisiers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\MenuisierController::class,'search']);

    });

    /// Electriciens
    Route::group(["prefix" => "electriciens"], function(){

        /// Affiche la liste des electriciens
        Route::get('/',[\App\Http\Controllers\ElectricienController::class,'index']);

        /// Affiche la page des electriciens et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\ElectricienController::class,'search']);

    });

    /// Cuisiniers
    Route::group(["prefix" => "cuisiniers"], function(){

        /// Affiche la liste des cuisiniers
        Route::get('/',[\App\Http\Controllers\UserController::class,'CuisinierIndex']);

        /// Affiche la page des cuisiniers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\UserController::class,'searchCuisinier']);

    });

    /// Menagers
    Route::group(["prefix" => "menagers"], function(){

        /// Affiche la liste des menagers
        Route::get('/',[\App\Http\Controllers\UserController::class,'MenagerIndex']);

        /// Affiche la page des menagers et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\UserController::class,'searchMenager']);

    });

    /// nounous
    Route::group(["prefix" => "nounous"], function(){

        /// Affiche la liste des nounous
        Route::get('/',[\App\Http\Controllers\UserController::class,'NounouIndex']);

        /// Affiche la page des nounous et liste ces derniers en fonction de la ville ou le quartier
        Route::get('/search',[\App\Http\Controllers\UserController::class,'searchNounou']);

    });

});

/// Gestion des utilisateurs
Route::group(["prefix" => "users"], function(){


    //Renvoie la page de profile utilisateur
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'edit']);

    //Renvoie la page de connexion
    Route::get('/login',[\App\Http\Controllers\LoginController::class,'ShowLoginPage']);

    //Deconnecte l'utilisateur
    Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout']);

    //Renvoie le formulaire d'inscription
    Route::get('/inscription',[\App\Http\Controllers\UserController::class,'create']);
    
    //Enregistre un utilisateur
    Route::post('/inscription',[\App\Http\Controllers\UserController::class,'store']);
    
    //Se charge de loguer l'utilisateur
    Route::post('/login',[\App\Http\Controllers\LoginController::class,'authenticate']);

    //Modifie le profile utilisateur
    Route::post('/profile',[\App\Http\Controllers\UserController::class,'update']);
    

});


