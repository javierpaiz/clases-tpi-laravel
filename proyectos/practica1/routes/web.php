<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('pages.inicio');
});
Route::get('/miperfil', function () {
    return view('pages.mi_perfil');
});