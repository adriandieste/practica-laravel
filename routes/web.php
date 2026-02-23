<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LocalizationController;

// Localization
Route::get('locale/{locale}', [LocalizationController::class, 'locale'])->name('locale');

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Alumnos CRUD
    Route::resource('alumnos', AlumnoController::class);
});

// Fortify authentication routes are automatically included

