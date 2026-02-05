<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/accessibility-statement', function () {
    return view('accessibility-statement');
});
