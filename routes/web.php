<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\barberoController;
use App\Http\Controllers\serviciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('cliente', ClienteController::class);
Route::resource('barberos', barberoController::class);
Route::resource('servicios', serviciosController::class);