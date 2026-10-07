<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('acceuil',['titre' => '<b>Bestiaire</b>']);
})->name('acceuil');
