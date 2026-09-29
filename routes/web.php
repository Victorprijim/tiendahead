<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

// Rutas de la web de Cafetería El Rincón
Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/carta', [PaginaController::class, 'carta'])->name('carta');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
