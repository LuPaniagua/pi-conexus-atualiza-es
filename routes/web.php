<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\LaudoController;
use App\Http\Controllers\MedicoController;

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

Route::get('/pefil', function () {
    return view('perfil'); // <<-- Sugiro que a home seja a '/'
})->name('perfil');// <-- Adiciona o fechamento do grupo middleware

Route::get('/perfil-medico', function () {
    return view('perfil-medico');
})->name('perfil-medico');// <-- Adiciona o fechamento do grupo middleware

Route::get('/cadastromedico', function () {
    return view('cadastromedico');
})->name('cadastromedico');// <-- Adiciona o fechamento do grupo middleware

// ROTAS DE SALAS
Route::get('/salas', [SalaController::class, 'index'])->name('salas.index');
Route::get('/criar-salas', [SalaController::class, 'create'])->name('criar-salas');
Route::post('/salas', [SalaController::class, 'store'])->name('salas.store');

// Laudo
Route::post('/laudo', [LaudoController::class, 'store'])->name('laudo.store');

// Escolha

Route::get('/escolha', function () {
    return view('escolha');
})->name('escolha');

// Rota para exibir o formulário de cadastro
Route::get('/cadastromedico', [MedicoController::class, 'create'])->name('cadastromedico.create');

// Rota para processar o formulário de cadastro
Route::post('/cadastromedico', [MedicoController::class, 'store'])->name('cadastromedico.store');

Route::middleware('auth.medico')->group(function () {
    Route::get('/perfil-medico', function () {
        return view('perfil-medico');
    });
});
// Se você não for usar o sistema de autenticação padrão do Laravel (Breeze/Jetstream)
// require __DIR__.'/auth.php';