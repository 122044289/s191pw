<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

/*ruta para trabajar con el controlador vistas*/ 
Route::get('/', [controladorvistas::class, 'home'])->name('rutainicio');

route::get('/consultar', [controladorvistas::class, 'select'])->name('rutaconsulta');

Route::view('/component', 'componentes')->name('rutacomponent');

route::post('/enviarCliente', [controladorvistas::class, 'procesarCliente'])->name('rutaenvia');

/*ruta para trabajar con clienteController*/
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');

