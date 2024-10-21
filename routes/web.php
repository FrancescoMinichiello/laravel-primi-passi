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


Route::get('/', function () {
    $title= "Hello World";
    $desc= "Laravel è un framework PHP open-source che semplifica lo sviluppo web, promuovendo
    una sintassi espressiva e chiara. Con architettura MVC, Laravel include funzioni per routing,
    database e caching, facilitando la creazione di applicazioni moderne e scalabili.
    Questa è una lista di formaggi";
    $list = [
        "Formaggio",
        "Pecorino",
        "Grana Padano",
        "Gorgonzola",
        "Asiago"
    ];



    return view('home', compact("title", "desc", "list"));
});
