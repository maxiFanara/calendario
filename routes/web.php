<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorEvento;

Route::get('/', [ControladorEvento::class, 'verMes'])->name('inicio');
Route::get('/semana', [ControladorEvento::class, 'verSemana']);
Route::get('/dia', [ControladorEvento::class, 'verDia']);
Route::get('/nuevoEvento', [ControladorEvento::class, 'nuevoEvento']);
Route::get('/eventos', [ControladorEvento::class, 'listar']);
Route::post('/evento', [ControladorEvento::class, 'crear']);
Route::get('/eventoAct/{id}', [ControladorEvento::class, 'actualizar']);
Route::get('/eliminaEvento/{id}', [ControladorEvento::class, 'eliminar']);
Route::get('/evento/{id}', [ControladorEvento::class, 'verEvento']);

