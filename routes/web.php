<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', [PropertyController::class, 'index'])
    ->name('dashboard');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

});

Route::resource('property', PropertyController::class);

Route::get('/admin/property/create', [PropertyController::class,'create'])->name('property.create');
Route::post('/admin/property/store', [PropertyController::class,'store'])->name('property.store');

Route::get('/admin/dashboard', [PropertyController::class, 'AdminDashboard'])
    ->name('admin.dashboard');;

Route::get('/admin/property/create', [PropertyController::class,'create'])->name('property.create');
