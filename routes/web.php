<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');


Route::post('/clientes/store', [ClienteController::class, 'store']);


Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');


Route::delete('/clientes/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');


Route::get('/clientes/consultar-cep', [ClienteController::class, 'consultarCep']);
