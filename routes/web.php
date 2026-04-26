<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartphone', function () {
    return view('smartphone.index', ['title' => 'Smartphone']);
});

Route::get('/smartphone/create', function () {
    return view('smartphone.create', ['title' => 'Create Smartphone']);
});
