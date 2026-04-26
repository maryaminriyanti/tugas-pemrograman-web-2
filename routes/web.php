<?php

use App\Http\Controllers\SmartphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartphone', [SmartphoneController::class, 'index']);
Route::get('/smartphone/create', [SmartphoneController::class, 'create']);
