<?php

namespace App\Http\Controllers;

use App\Models\Metodologia;
use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metodologias = Metodologia::all();
        return view('metodologias/metodologias', compact('metodologias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metodologias/metodologiascreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nome_metodologia' => 'required|min:4|unique:metodologias',
              'descricao_metodologia' => 'required|min:4'], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_metodologia' => 'O nome da Metodologia deve possuir pelo menos 4 caracteres',
                'nome_metodologia' => 'Já possui uma Metodologia com esse nome, verifique na lista de Metodologias cadastradas',
                'descricao_metodologia' => 'O campo Descrição deve conter Pelo Menos 4 caracteres'
            ]
        );
        $metodologia = new Metodologia();
        $metodologia->nome_metodologia = $request->nome_metodologia;
        $metodologia->descricao_metodologia = $request->descricao_metodologia;
        $metodologia->save();

        return redirect()->route('metodologias.index')->with('msg_success','Metodologia Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Metodologia $metodologia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Metodologia $metodologia)
    {
        return view('metodologias/metodologiasedit', compact(['metodologia']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Metodologia $metodologia)
    {
        $metodologia->nome_metodologia = $request->nome_metodologia;
        $metodologia->descricao_metodologia = $request->descricao_metodologia;
        $metodologia->save();
        return redirect()->route('metodologias.index')->with('msg_success','Metodologia Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metodologia $metodologia)
    {
        $metodologia->delete();
        return redirect()->route('metodologias.index')->with('msg_success','metodologia Removida com sucesso');
    }
}
