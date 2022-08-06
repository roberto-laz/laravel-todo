<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::resource('todolists', TodolistController::class);
