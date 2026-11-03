<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bonjour', function () {
    $prenom = 'bob';
    return view('bonjour', ['user'=>$prenom]);
});
