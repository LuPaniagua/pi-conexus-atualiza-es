<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\LaudoController;

// Rota para exibir o formulário de cadastro
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');

// Rota para processar o formulário de cadastro
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

// Rota para exibir a página de termos de serviço
Route::get('/termos-de-servico', function () {
    return view('termos-de-servico');
});

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

// Área do usuário
Route::get('/area-user', function () {
    return redirect()->route('area-user');
});

Route::get('/area', function () {
    return view('area-user');
})->name('area-user');

// Sobre
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

// Cadastrar laudo
Route::get('/cadastrarlaudo', function () {
    return view('cadastrarlaudo');
})->name('cadastrarlaudo');

// ROTAS DE SALAS
Route::get('/salas', [SalaController::class, 'index'])->name('salas.index');
Route::get('/criar-salas', [SalaController::class, 'create'])->name('criar-salas');
Route::post('/salas', [SalaController::class, 'store'])->name('salas.store');

// Laudo
Route::post('/laudo', [LaudoController::class, 'store'])->name('laudo.store');

// Se você não for usar o sistema de autenticação padrão do Laravel (Breeze/Jetstream)
// require __DIR__.'/auth.php';