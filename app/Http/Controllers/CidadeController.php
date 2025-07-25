<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('cidadescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
            [ 'nome_cidades' => 'required|min:3|unique:cidades',
              'uf_cidade' => 'required|max:2'], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_cidades' => 'O nome da Cidade deve possuir pelo menos 3 caracteres',
                'nome_cidades' => 'Já possui uma cidade com esse nome, verifique na lista de cidades cadastradas',
                'uf_cidade' => 'O campo UF deve conter somente 2 caracteres, EX: MT, SP, RO, etc'
            ]
        );
        $cidade = new Cidade();
        $cidade->nome_cidades = $request->nome_cidades;
        $cidade->uf_cidade = $request->uf_cidade;
        $cidade->save();

        return redirect()->route('cidades')->with('msg_success','Cidade Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cidade $cidade)
    {
         return view('cidadesedit', compact(['cidade']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cidade $cidade)
    {
        $cidade->nome_cidades = $request->nome_cidades;
        $cidade->uf_cidade = $request->uf_cidade;
        $cidade->save();
        return redirect()->route('cidades')->with('msg_success','Cidade Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
