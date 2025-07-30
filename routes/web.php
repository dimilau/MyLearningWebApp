<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pineapple', function () {
    return view('pineapple', ['name' => 'Pineapple']);
});
