<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/odelia', function () {
    return view('odelia');
});
Route::get('/odelia/index', function () {
    return view('odelia.index');
});
