<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/guest', [HomeController::class, 'guest'])
    ->middleware('my_auth_by_name:guest');

Route::post('/auth/name', [HomeController::class, 'auth'])
    ->middleware('my_auth_by_name');
