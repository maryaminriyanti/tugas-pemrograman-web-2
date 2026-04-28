<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\SmartphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SmartphoneController::class, 'index']);

Route::get('/smartphone', [SmartphoneController::class, 'index'])->name('smartphone.index');
Route::get('/smartphone/create', [SmartphoneController::class, 'create'])->name('smartphone.create');
Route::post('/smartphone/store', [SmartphoneController::class, 'store'])->name('smartphone.store');
Route::get('/smartphone/{smartphone}/edit', [SmartphoneController::class, 'edit'])->name('smartphone.edit');
Route::put('/smartphone/{smartphone}', [SmartphoneController::class, 'update'])->name('smartphone.update');
Route::delete('/smartphone/{smartphone}', [SmartphoneController::class, 'destroy'])->name('smartphone.destroy');

Route::resource('brand', BrandController::class);
Route::resource('smartphone', SmartphoneController::class);

