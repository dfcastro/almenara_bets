<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return view('auth.register-page');
})->middleware('guest')->name('register');


// Rota para o painel, acessível apenas para usuários logados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::post('/logout', function (Request $request) {
    // A função principal que faz o logout do usuário.
    auth()->logout();

    // Invalida a sessão do usuário. É uma boa prática de segurança.
    $request->session()->invalidate();

    // Gera um novo token CSRF para a próxima sessão.
    $request->session()->regenerateToken();

    // Redireciona o usuário para a página inicial.
    return redirect('/');
})->name('logout');

Route::get('/login', function () {
    return view('auth.login-page');
})->middleware('guest')->name('login');