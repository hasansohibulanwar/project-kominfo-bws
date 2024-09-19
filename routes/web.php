<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LaporController;

Route::get('/', function () {
    return view('landing-page');
});

// Registration Routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Pegawai Resource Routes
Route::resource('pegawai', PegawaiController::class);

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Lapor Routes (Report Management)
    Route::get('/lapor', [LaporController::class, 'index'])->name('lapor.index');          // List reports
    Route::get('/lapor/create', [LaporController::class, 'create'])->name('lapor.create'); // Form to create a new report
    Route::post('/lapor', [LaporController::class, 'store'])->name('lapor.store');         // Store new report
    Route::get('/lapor/{id}', [LaporController::class, 'show'])->name('lapor.show');       // Show report details
    Route::put('/lapor/{id}', [LaporController::class, 'update'])->name('lapor.update');   // Update report
    Route::delete('/lapor/{id}', [LaporController::class, 'destroy'])->name('lapor.destroy'); // Delete report
});

// Ensure the auth routes are included
require __DIR__.'/auth.php';
