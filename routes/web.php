<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| HOME & LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');


/*
|--------------------------------------------------------------------------
| USER DASHBOARD (lihat property saja)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [PropertyController::class, 'index'])
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD (dengan CRUD)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

});


/*
|--------------------------------------------------------------------------
| CRUD PROPERTY
|--------------------------------------------------------------------------
*/

Route::resource('property', PropertyController::class);
