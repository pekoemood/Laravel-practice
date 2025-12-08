<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);
