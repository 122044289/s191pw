<?php

use Illuminate\Support\Facades\Route;



/* Route::get('/', function () {
    return view('welcome');
}); */

Route ::view('/', 'inicio') ->name('rutainicio');

Route ::view('/formulario', 'formulario')->name('rutacacas');

Route ::view('/consultar', 'clientes')->name('rutaconsulta');