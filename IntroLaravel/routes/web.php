<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


/* Rutas para trabajar con ClienteController */
Route::get('/', [clienteController::class, 'home'])->name('rutainicio');

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenvia');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaconsulta');

Route::get('/clientes/{id}/editar', [ClienteController::class, 'editar'])->name('clientes.editar');

Route::post('/clientes/{id}/actualizar', [ClienteController::class, 'actualizar'])->name('clientes.actualizar');

Route::delete('/clientes/{id}/eliminar', [ClienteController::class, 'eliminar'])->name('clientes.eliminar');

/* Route::view('/component', 'componentes')->name('rutacomponent'); */