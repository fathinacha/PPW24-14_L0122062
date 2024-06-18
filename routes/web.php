<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Ruteautentikasi
Route::middleware('web')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['web', 'auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [BukuController::class, 'index'])->name('bukus.index');
    Route::get('/bukus', [BukuController::class, 'index']);
    Route::get('/bukus/create', [BukuController::class, 'create'])->name('bukus.create');
    Route::get('/bukus/{buku}/edit', [BukuController::class, 'edit'])->name('bukus.edit');
    Route::put('/bukus/{buku}', [BukuController::class, 'update'])->name('bukus.update');
    Route::delete('/bukus/{buku}', [BukuController::class, 'destroy'])->name('bukus.destroy');
    Route::post('/bukus', [BukuController::class, 'store'])->name('bukus.store');

    Route::get('/home', function () {
        return 'Home';
    });
});