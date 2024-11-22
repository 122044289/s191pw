<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


/*Rutas para trabajar con ClienteController*/
Route::get('/', [clienteController::class, 'home'])->name('rutainicio');

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenvia');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaconsulta');


/* Route::view('/component', 'componentes')->name('rutacomponent'); */

Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('rutaedit');

Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('rutaupdate'); 


Route::get('/cliente/delete/{id}', [clienteController::class, 'destroy'])->name('rutadelete');