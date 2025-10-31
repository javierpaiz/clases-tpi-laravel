<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inicio', [HomeController::class,'home']);
Route::get('/miperfil', function () {
    return view('pages.mi_perfil');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/inicio','home')->name('home');
    Route::get('/mensaje/{nombre}','mensaje')->name('mensaje');
    Route::get('/form','mostrarFormulario')->name('formulario');
    Route::post('/formRecibe','recibirFormulario')->name('recibeForm');
});
Route::resource("/departamentos", DepartamentosController::class);
