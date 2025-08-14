<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'cpf' => 'nullable|string|max:14|unique:medicos',
            'especialidade' => 'nullable|string|max:100',
            'crm' => 'nullable|string|max:20|unique:medicos',
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:medicos',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $medico = Medico::create($validated);

        return response()->json([
            'message' => 'Médico cadastrado com sucesso!',
            'data' => $medico,
        ], 201);
    }
    public function create()
    {
        return view('cadastromedico');
    }


}