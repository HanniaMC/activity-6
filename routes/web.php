<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Página principal (opcional)
Route::get('/', function () {
    return view('welcome');
});

// Rutas para Products (solo las que pide la tarea)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');