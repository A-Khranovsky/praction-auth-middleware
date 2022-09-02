<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest', function(){
    return view('guest', ['your_name' => 'guest']);
})->middleware('my_auth_by_name:guest');

Route::post('/auth/name', function(Request $request){
    return view('welcome', ['your_name' => $request->your_name]);
})->middleware('my_auth_by_name');
