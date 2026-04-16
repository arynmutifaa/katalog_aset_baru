<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Katalog Asset
Route::get('/katalog-aset', function () {
    return view('katalog-aset');
})->name('katalog.aset');

// Dashboard umum (lihat property saja)
Route::get('/dashboard', [PropertyController::class, 'index'])
    ->name('dashboard');

// Detail property (public)
Route::get('/property/{id}', [PropertyController::class, 'show'])
    ->name('property.show');

// login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

// admin route
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard admin
        Route::get('/dashboard', [AdminPropertyController::class, 'index'])
            ->name('dashboard');

        // CRUD Property
        Route::get('/property', [AdminPropertyController::class, 'index'])
            ->name('property.index');

        Route::get('/property/create', [AdminPropertyController::class, 'create'])
            ->name('property.create');

        Route::post('/property', [AdminPropertyController::class, 'store'])
            ->name('property.store');

        Route::get('/property/{id}', [AdminPropertyController::class, 'show'])
            ->name('property.show');

        Route::get('/property/{id}/edit', [AdminPropertyController::class, 'edit'])
            ->name('property.edit');

        Route::put('/property/{id}', [AdminPropertyController::class, 'update'])
            ->name('property.update');

        Route::delete('/property/{id}', [AdminPropertyController::class, 'destroy'])
            ->name('property.destroy');
    });
