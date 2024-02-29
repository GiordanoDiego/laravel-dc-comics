<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;


Route::get('/', function () {

    return view('welcome');
    // return view('welcome', compact('firstName', 'lastName'));
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

Route::resource('comics', ComicController::class);