<?php

use App\Http\Controllers\SmartphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SmartphoneController::class, 'index']);

Route::get('/smartphone', [SmartphoneController::class, 'index'])->name('smartphone.index');
Route::get('/smartphone/create', [SmartphoneController::class, 'create'])->name('smartphone.create');
Route::post('/smartphone/store', [SmartphoneController::class, 'store'])->name('smartphone.store');
