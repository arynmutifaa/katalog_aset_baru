<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/katalog-aset', function () {
    return view('katalog-aset');
})->name('katalog.aset');

Route::get('/company-profile', function () {
    return view('katalog.company-profile');
})->name('company.profile');

Route::get('/our-capabilities', function () {
    return view('katalog.our-capabilities');
})->name('our.capabilities');

Route::get('/product-portfolio-digital-business', function () {
    return view('katalog.product-portfolio-digital-business');
})->name('product.portfolio');

Route::get('/business-scheme', function () {
    return view('katalog.business-scheme');
})->name('business.scheme');

Route::get('/gallery', function () {
    return view('katalog.gallery');
})->name('gallery');

Route::get('/dashboard', [PropertyController::class, 'index'])
    ->name('dashboard');

Route::get('/property/{id}', [PropertyController::class, 'show'])
    ->name('property.show');

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        Route::get('/property', [AdminPropertyController::class, 'index'])
            ->name('property.index');

        Route::get('/property/create', [AdminPropertyController::class, 'create'])
            ->name('property.create');

        Route::get('/property/import', [AdminPropertyController::class, 'importForm'])
            ->name('property.import.form');
        Route::post('/property/import', [AdminPropertyController::class, 'import'])
            ->name('property.import');
        Route::get('/property/template', [AdminPropertyController::class, 'downloadTemplate'])
            ->name('property.template');

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