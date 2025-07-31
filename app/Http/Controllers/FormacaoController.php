<?php

namespace App\Http\Controllers;

use App\Models\Formacao;
use Illuminate\Http\Request;

class FormacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formacoes = Formacao::all();
        return view('formacoes/formacoes', compact('formacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formacoes/formacoescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nivel_formacao' => 'required|min:2|:formacoes',
              'nome_curso',
              'nome_entidade',
              'modalidade',
              'situacao',
              'data_inicio_form',
              'data_fim_form',
              'obs_formacao'
            ], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nivel_formacao' => 'O nome do aperfeicoamentos deve possuir pelo menos 2 caracteres',

            ]
        );
        $formacoes = new Formacao();
        $formacoes->nivel_formacao = $request->nivel_formacao;
        $formacoes->nome_curso = $request->nome_curso;
        $formacoes->nome_entidade = $request->nome_entidade;
        $formacoes->modalidade = $request->modalidade;
        $formacoes->situacao = $request->situacao;
        $formacoes->data_inicio_form = $request->data_inicio_form;
        $formacoes->data_fim_form = $request->data_fim_form;
        $formacoes->obs_formacao = $request->obs_formacao;
        $formacoes->save();

        return redirect()->route('formacoes.index')->with('msg_success','formacao Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Formacao $formacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formacao $formacao)
    {
        return view('formacoes/formacoesedit', compact(['formacao']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formacao $formacao)
    {
        $formacao->nivel_formacao = $request->nivel_formacao;
        $formacao->nome_curso = $request->nome_curso;
        $formacao->nome_entidade = $request->nome_entidade;
        $formacao->modalidade = $request->modalidade;
        $formacao->situacao = $request->situacao;
        $formacao->data_inicio_form = $request->data_inicio_form;
        $formacao->data_fim_form = $request->data_fim_form;
        $formacao->obs_formacao = $request->obs_formacao;
        $formacao->save();
        return redirect()->route('formacoes.index')->with('msg_success','formacao Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formacao $formacao)
    {
        $formacao->delete();
        return redirect()->route('formacoes.index')->with('msg_success','formacao Removida com sucesso');
    }
}
