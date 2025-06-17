<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layout.main');
});

Route::get('/sale', function () {
    return view('user.layout.sale');
});


