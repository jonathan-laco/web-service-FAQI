<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'logradouro' => 'required|string|max:255',
            'numero' => 'required|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|size:2',
            'cep' => 'required|regex:/\d{5}-\d{3}/',
        ]);


        Cliente::create($request->only([
            'nome',
            'logradouro',
            'numero',
            'complemento',
            'bairro',
            'cidade',
            'uf',
            'cep'
        ]));


        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'logradouro' => 'required|string|max:255',
            'numero' => 'required|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|size:2',
            'cep' => 'required|regex:/\d{5}-\d{3}/',
        ]);

        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->only([
            'nome',
            'logradouro',
            'numero',
            'complemento',
            'bairro',
            'cidade',
            'uf',
            'cep'
        ]));

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
