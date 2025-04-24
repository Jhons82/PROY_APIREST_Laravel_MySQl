<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriacontroller;
use App\Models\categoria;
use Illuminate\Http\Middleware\VerifyCsrfToken;


Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando']);
});

Route::post('/addCategoria', [CategoriaController::class, 'insertCategoria']);

Route::put('/updateCategoria/{id}', [CategoriaController::class, 'updateCategoria']);

Route::delete('/deleteCategoria/{id}', [CategoriaController::class, 'deleteCategoria']);