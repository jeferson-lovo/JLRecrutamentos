<?php

namespace App\Http\Controllers;

use App\Models\Aperfeicoamento;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use App\Models\Oportunidade;
use App\Models\Cidade;
use App\Models\Metodologia;
use App\Models\Competencia;
use App\Models\Area;
use App\Models\Experiencia;
use App\Models\Formacao;



class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculos = Curriculo::all();
        $cidades = Cidade::all();
        $competencias = Competencia::all();
        $metodologias = Metodologia::all();
        $areas = Area::all();
        $experiencias = Experiencia::all();
        $aperfeicoamentos = Aperfeicoamento::all();
        $formacoes = Formacao::all();
        return view('curriculos/curriculos', compact('curriculos', 'cidades', 'competencias', 'metodologias', 'areas', 'experiencias', 'aperfeicoamentos', 'formacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cidades = Cidade::all();
        $metodologias = Metodologia::all();
        $competencias = Competencia::all();
        $areas = Area::all();
        $experiencias = Experiencia::all();
        $aperfeicoamentos = Aperfeicoamento::all();
        $formacoes = Formacao::all();
        $ufs = Cidade::select('uf_cidade')->distinct()->orderBy('uf_cidade', 'asc')->pluck('uf_cidade');//listar cidades apos selecionar UF

        return view('curriculos/curriculoscreate', compact('ufs', 'cidades', 'metodologias', 'competencias', 'areas', 'experiencias', 'aperfeicoamentos', 'formacoes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
            [ 'nome_curriculo' => 'required|min:2|:curriculos',
              'sexo_curriculo',
              'nacionalidade_curriculo',
              'cidade_atual_curriculo',
              'uf_atual_curriculo',
              'telefone_curriculo',
              'email_curriculo',
              'linkedin',
              'instagran',
              'site_curriculo',
              'atualizacao_curriculo',
              'comentario_rh',
              'nota_rh',
              'cidade_id',
              'metodologia_id',
              'competencia_id',
              'area_id',
              'experiencia_id',
              'aperfeicoamento_id',
              'formacao_id'
            ], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_curriculo' => 'O nome da oportunidade deve possuir pelo menos 2 caracteres',

            ]
        );
        $curriculos = new Curriculo();
        $curriculos->nome_curriculo = $request->nome_curriculo;
        $curriculos->sexo_curriculo = $request->sexo_curriculo;
        $curriculos->nacionalidade_curriculo = $request->nacionalidade_curriculo;
        $curriculos->cidade_atual_curriculo = $request->cidade_atual_curriculo;
        $curriculos->uf_atual_curriculo = $request->uf_atual_curriculo;
        $curriculos->telefone_curriculo = $request->telefone_curriculo;
        $curriculos->email_curriculo = $request->email_curriculo;
        $curriculos->linkedin = $request->linkedin;
        $curriculos->instagran = $request->instagran;
        $curriculos->site_curriculo = $request->site_curriculo;
        $curriculos->atualizacao_curriculo = $request->atualizacao_curriculo;
        $curriculos->comentario_rh = $request->comentario_rh;
        $curriculos->nota_rh = $request->nota_rh;
        $curriculos->cidade_id = $request->cidade_id;
        $curriculos->metodologia_id = $request->metodologia_id;
        $curriculos->competencia_id = $request->competencia_id;
        $curriculos->area_id = $request->area_id;
        $curriculos->experiencia_id = $request->experiencia_id;
        $curriculos->aperfeicoamento_id = $request->aperfeicoamento_id;
        $curriculos->formacao_id = $request->formacao_id;
        $curriculos->save();

        return redirect()->route('curriculos.index')->with('msg_success','curriculo Cadastrado com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Curriculo $curriculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculo $curriculo)
    {
        $curriculo->load('cidade'); // Carrega a relação cidade para evitar consultas adicionais
        $metodologias = Metodologia::all();
        $competencias = Competencia::all();
        $areas = Area::all();
        $experiencias = Experiencia::all();
        $aperfeicoamentos = Aperfeicoamento::all();
        $formacoes = Formacao::all();


        // Listar UFs distintas
        // e as cidades do estado selecionado no curriculo
        $ufs = Cidade::select('uf_cidade')->distinct()->orderBy('uf_cidade', 'asc')->pluck('uf_cidade');//listar UFs
        // Verifica se a cidade do curriculo tem UF definida e busca as cidades desse estado
        $cidadesDoEstado = [];
        if (isset($curriculo->cidade->uf_cidade)) {
            $cidadesDoEstado = Cidade::where('uf_cidade', $curriculo->cidade->uf_cidade)
                                     ->orderBy('nome_cidades', 'asc')
                                     ->get();
        }

        return view('curriculos/curriculosedit', compact('curriculo', 'cidadesDoEstado','ufs', 'metodologias', 'competencias', 'areas', 'experiencias', 'aperfeicoamentos', 'formacoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculo $curriculo)
    {
        $curriculo->nome_curriculo = $request->nome_curriculo;
        $curriculo->sexo_curriculo = $request->sexo_curriculo;
        $curriculo->nacionalidade_curriculo = $request->nacionalidade_curriculo;
        $curriculo->cidade_atual_curriculo = $request->cidade_atual_curriculo;
        $curriculo->uf_atual_curriculo = $request->uf_atual_curriculo;
        $curriculo->telefone_curriculo = $request->telefone_curriculo;
        $curriculo->email_curriculo = $request->email_curriculo;
        $curriculo->linkedin = $request->linkedin;
        $curriculo->instagran = $request->instagran;
        $curriculo->site_curriculo = $request->site_curriculo;
        $curriculo->atualizacao_curriculo = $request->atualizacao_curriculo;
        $curriculo->comentario_rh = $request->comentario_rh;
        $curriculo->nota_rh = $request->nota_rh;
        $curriculo->cidade_id = $request->cidade_id;
        $curriculo->metodologia_id = $request->metodologia_id;
        $curriculo->competencia_id = $request->competencia_id;
        $curriculo->area_id = $request->area_id;
        $curriculo->experiencia_id = $request->experiencia_id;
        $curriculo->aperfeicoamento_id = $request->aperfeicoamento_id;
        $curriculo->formacao_id = $request->formacao_id;
        $curriculo->save();
        return redirect()->route('curriculos.index')->with('msg_success','curriculo Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculo $curriculo)
    {
        $curriculo->delete();
        return redirect()->route('curriculos.index')->with('msg_success','curriculo Removido com sucesso');
    }
}
