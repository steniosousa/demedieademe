<?php

use App\Http\Controllers\Auth\AuthSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\IgrejaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GlobalController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'dashboardScreen'])->middleware(['auth:admin'])->name('dashboard');

Route::get('/login', [AuthSessionController::class, 'loginScreen'])->middleware('guest')->name('login');
Route::post('/login', [AuthSessionController::class, 'authenticate'])->middleware('guest')->name('login');
Route::post('/logout', [AuthSessionController::class, 'logout'])->middleware('auth:user,admin')->name('logout');

Route::post('/igreja', [IgrejaController::class, 'store'])->middleware('auth:admin')->name('igreja');

require __DIR__.'/auth.php';
