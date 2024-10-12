<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');
Route::get('/form', [controladorVistas::class,'insert'])->name('rutacacas');
Route::get('/consultar', [controladorVistas::class,'select'])->name('rutaconsulta');


/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route ::view('/', 'inicio') ->name('rutainicio');

Route ::view('/form', 'formulario')->name('rutacacas');

Route ::view('/consultar', 'clientes')->name('rutaconsulta'); */

Route::view('/component', 'componentes')->name('rutacomponent');