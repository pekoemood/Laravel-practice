<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Livewire\HelloComponent;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', [HelloController::class, 'index']);

Route::post('hello', [HelloController::class, 'post']);

Route::get('/hello-component', HelloComponent::class);
