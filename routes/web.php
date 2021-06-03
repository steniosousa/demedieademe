<?php

use Illuminate\Support\Facades\Route;

// NÃO MEXA
//Rota para redirecionar quando autenticado
Route::get("/admin", [LoginController::class, 'index']);
//Rota que exibirá um formulário de login, caso usuário não esteja autenticado.
Route::get("/admin", "LoginController@index");
//Rota para deslogar
Route::get("/admin/logout", "LoginController@logout");
//Rota POST para envio de autenticação
Route::get("/admin", "LoginController@postLogin");


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
