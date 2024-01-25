<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $dati = config("data");
    return view('home', $dati);
})->name("home");

Route::resource("comics", ComicController::class);
