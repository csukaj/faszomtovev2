<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/kapcsolat', [HomeController::class, 'contact']);