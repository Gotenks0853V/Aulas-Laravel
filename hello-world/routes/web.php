<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello-world');
});

Route::get('/hello/{name}', function ($name) {
    
    $data = ['name' => $name];
    return view('hello', $data);
});
