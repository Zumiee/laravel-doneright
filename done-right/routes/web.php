<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'Jaycee'
    ]);
});


Route::get('/hello', function () {
    return 'Hello';
})->name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    // return 'Hello ' . $name . '!';
    return "Hello $name!";
});

Route::fallback(function () {
    return 'What???';
});
