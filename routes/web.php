<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login'); // Certifique-se de que a view está em resources/views/login.blade.php
})->name('login');

// Adicione a rota para o login submit
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');



Route::get('/', [MedicamentoController::class, 'home'])->name('medicamentos.pagina_inicial');

Route::resource('medicamentos', MedicamentoController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard'); // Página do administrador
    })->name('admin.dashboard');

    Route::get('/funcionario', function () {
        return view('funcionario.dashboard'); // Página do funcionário
    })->name('funcionario.dashboard');

    Route::get('/user', function () {
        return view('user.dashboard'); // Página do cliente
    })->name('user.dashboard');
});


