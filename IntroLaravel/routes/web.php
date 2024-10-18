<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

Route::get('/', [controladorvistas::class, 'home'])->name('rutainicio');
Route::get('/formulario', [controladorvistas::class, 'insert'])->name('rutacacas');
route::get('/consultar', [controladorvistas::class, 'select'])->name('rutaconsulta');
route::post('/enviarCliente', [controladorvistas::class, 'procesarCliente'])->name('rutaenvia');

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'inicio')->name('rutainicio');

Route::view('/form', 'formulario')->name('rutacacas');

Route::view('/consultar', 'clientes')->name('rutaconsulta'); */

Route::view('/component', 'componentes')->name('rutacomponent');