<?php

use App\Http\Controllers\Auth\AuthSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:admin'])->name('dashboard');

Route::get('/login', [AuthSessionController::class, 'loginScreen'])->middleware('guest')->name('login');
Route::post('/login', [AuthSessionController::class, 'authenticate'])->middleware('guest')->name('login');
Route::post('/logout', [AuthSessionController::class, 'logout'])->middleware('auth:user,admin')->name('logout');

require __DIR__.'/auth.php';
