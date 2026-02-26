<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', [PropertyController::class, 'index'])->name('dashboard');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');
