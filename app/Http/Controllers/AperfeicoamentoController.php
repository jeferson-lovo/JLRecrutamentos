<?php

namespace App\Http\Controllers;

use App\Models\Aperfeicoamento;
use Illuminate\Http\Request;

class AperfeicoamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aperfeicoamentos = Aperfeicoamento::all();
        return view('aperfeicoamentos/aperfeicoamentos', compact('aperfeicoamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aperfeicoamentos/aperfeicoamentoscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nome_aperfeicoamento' => 'required|min:2|:aperfeicoamentos',
              'nome_entidade_ap',
              'carga_horaria_ap',
            ], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_aperfeicoamento' => 'O nome do aperfeicoamentos deve possuir pelo menos 2 caracteres',

            ]
        );
        $aperfeicoamentos = new Aperfeicoamento();
        $aperfeicoamentos->nome_aperfeicoamento = $request->nome_aperfeicoamento;
        $aperfeicoamentos->nome_entidade_ap = $request->nome_entidade_ap;
        $aperfeicoamentos->carga_horaria_ap = $request->carga_horaria_ap;
        $aperfeicoamentos->save();

        return redirect()->route('aperfeicoamentos.index')->with('msg_success','aperfeicoamento Cadastrado com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Aperfeicoamento $aperfeicoamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aperfeicoamento $aperfeicoamento)
    {
        return view('aperfeicoamentos/aperfeicoamentosedit', compact(['aperfeicoamento']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aperfeicoamento $aperfeicoamento)
    {
        $aperfeicoamento->nome_aperfeicoamento = $request->nome_aperfeicoamento;
        $aperfeicoamento->nome_entidade_ap = $request->nome_entidade_ap;
        $aperfeicoamento->carga_horaria_ap = $request->carga_horaria_ap;
        $aperfeicoamento->save();
        return redirect()->route('aperfeicoamentos.index')->with('msg_success','aperfeicoamento Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aperfeicoamento $aperfeicoamento)
    {
        $aperfeicoamento->delete();
        return redirect()->route('aperfeicoamentos.index')->with('msg_success','aperfeicoamento Removido com sucesso');
    }
}
