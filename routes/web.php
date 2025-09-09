<?php

use App\Http\Controllers\SefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/sefas/about', [SefasController::class, 'about'])->name('sefas.about');
Route::get('/sefas/warehouse', [SefasController::class, 'warehouse'])->name('sefas.warehouse');
Route::get('/sefas/product', [SefasController::class, 'product'])->name('sefas.product');
Route::get('/sefas/product/{type}', [SefasController::class, 'product_type'])->name('sefas.product_type');