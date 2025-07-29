<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $competencias = Competencia::all();
        return view('competencias/competencias', compact('competencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('competencias/competenciascreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nome_competencia' => 'required|min:3|unique:competencias',
              'descricao_competencia' => 'required|min:4'], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_competencia' => 'O nome da competencia deve possuir pelo menos 4 caracteres',
                'nome_competencia' => 'Já possui uma competencia com esse nome, verifique na lista de competencias cadastradas',
                'descricao_competencia' => 'O campo Descrição deve conter Pelo Menos 4 caracteres'
            ]
        );
        $competencias = new Competencia();
        $competencias->nome_competencia = $request->nome_competencia;
        $competencias->descricao_competencia = $request->descricao_competencia;
        $competencias->save();

        return redirect()->route('competencias.index')->with('msg_success','competencia Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competencia $competencia)
    {
        return view('competencias/competenciasedit', compact(['competencia']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competencia $competencia)
    {
        $competencia->nome_competencia = $request->nome_competencia;
        $competencia->descricao_competencia = $request->descricao_competencia;
        $competencia->save();
        return redirect()->route('competencias.index')->with('msg_success','competencia Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competencia $competencia)
    {
        $competencia->delete();
        return redirect()->route('competencias.index')->with('msg_success','competencia Removida com sucesso');
    }
}
