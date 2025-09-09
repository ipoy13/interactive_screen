<?php

use App\Http\Controllers\BCIController;
use App\Http\Controllers\SefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// SEFAS
Route::get('/sefas/about', [SefasController::class, 'about'])->name('sefas.about');
Route::get('/sefas/warehouse', [SefasController::class, 'warehouse'])->name('sefas.warehouse');
Route::get('/sefas/product', [SefasController::class, 'product'])->name('sefas.product');
Route::get('/sefas/product/{type}', [SefasController::class, 'product_type'])->name('sefas.product_type');
Route::get('/sefas/packaging', [SefasController::class, 'packaging'])->name('sefas.packaging');
Route::get('/sefas/service', [SefasController::class, 'service'])->name('sefas.service');
Route::get('/sefas/sector', [SefasController::class, 'sector'])->name('sefas.sector');

// BCI
Route::get('/bci/about', [BCIController::class, 'about'])->name('bci.about');
Route::get('/bci/product', [BCIController::class, 'product'])->name('bci.product');
Route::get('/bci/product/{category}', [BCIController::class, 'product_category'])->name('bci.product_category');