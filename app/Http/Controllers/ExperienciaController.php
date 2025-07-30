<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias = Experiencia::all();
        return view('experiencias/experiencias', compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiencias/experienciascreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nome_empresa' => 'required|min:2|:experiencias',
              'cargo_inicio',
              'cargo_fim',
              'data_inicio',
              'data_fim',
              'comentarios_exp' => 'required|min:4'], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_empresa' => 'O nome da area deve possuir pelo menos 2 caracteres',
                'data_fim' => 'Data Final nao pode ser menor que a data inicial',
                'comentarios_exp' => 'O campo Descrição deve conter Pelo Menos 4 caracteres'
            ]
        );
        $experiencias = new Experiencia();
        $experiencias->nome_empresa = $request->nome_empresa;
        $experiencias->cargo_inicio = $request->cargo_inicio;
        $experiencias->cargo_fim = $request->cargo_fim;
        $experiencias->data_inicio = $request->data_inicio;
        $experiencias->data_fim = $request->data_fim;
        $experiencias->comentarios_exp = $request->comentarios_exp;
        $experiencias->save();

        return redirect()->route('experiencias.index')->with('msg_success','experiencia Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        return view('experiencias/experienciasedit', compact(['experiencia']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        $experiencia->nome_empresa = $request->nome_empresa;
        $experiencia->cargo_inicio = $request->cargo_inicio;
        $experiencia->cargo_fim = $request->cargo_fim;
        $experiencia->data_inicio = $request->data_inicio;
        $experiencia->data_fim = $request->data_fim;
        $experiencia->comentarios_exp = $request->comentarios_exp;
        $experiencia->save();
        return redirect()->route('experiencias.index')->with('msg_success','experiencia Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiencia $experiencia)
    {
        $experiencia->delete();
        return redirect()->route('experiencias.index')->with('msg_success','experiencia Removida com sucesso');
    }
}
