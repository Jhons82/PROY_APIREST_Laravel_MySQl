<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Models\categoria;
use Illuminate\Http\Request;
    

Route::get('/', function () {
    return view('welcome');
});

/* Ruoute of Laravel 8+ */
Route::get('/categoria', [CategoriaController::class, 'getCategoria']);

Route::get('/categoria/{id}', [CategoriaController::class, 'getCategoriaById']);
