@extends('layouts.app')

@section('content')
<div class="perfil-container">
    <img src="{{ asset('SRC/regullus.jpg') }}" alt="Foto do Usuário" class="perfil-foto">
    <div class="perfil-nome">Regullus Corneas</div>
    <div class="perfil-email">RegullusCorneas@email.com</div>
    <br>
    <div><strong>Idade:</strong> 428</div>
    <div><strong>Cidade:</strong> São Paulo</div>
    <div><strong>Telefone:</strong> (11) 99999-9999</div>
    <div><strong>Senha:</strong> *************</div>
    <button class="editar-btn">Editar Perfil</button>
</div>

<style>
    .perfil-container {
        background: #fff;
        max-width: 800px;
        max-height: 800px;
        margin: 40px auto;
        padding: 30px 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-align: center;
    }
    .perfil-foto {
        width: 400px;
        height: 400px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 2px solid #007bff;
    }
    .perfil-nome {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .perfil-email {
        color: #555;
        margin-bottom: 20px;
    }
    .editar-btn {
        margin-top: 20px;
        padding: 8px 20px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .editar-btn:hover {
        background: #0056b3;
    }
</style>
@endsection