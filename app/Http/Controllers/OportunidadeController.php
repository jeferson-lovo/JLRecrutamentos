<?php

namespace App\Http\Controllers;

use App\Models\Oportunidade;
use App\Models\Cidade;
use App\Models\Metodologia;
use App\Models\Competencia;
use App\Models\Area;
use App\Models\Curriculo;
use Illuminate\Http\Request;

class OportunidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oportunidades = Oportunidade::all();
        return view('oportunidades/oportunidades', compact('oportunidades'));
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
        return view('oportunidades/oportunidadescreate', compact('cidades', 'metodologias', 'competencias', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'descricao_oportunidade' => 'required|min:2|:oportunidades',
              'titulo_oportunidade',
              'requisitos_oportunidade',
              'beneficio_oportunidade',
              'data_abertura_oportunidade',
              'data_fechamento_oportunidade',
              'salario_oportunidade',
              'quantidade_oportunidade',
              'cidade_id',
              'metodologia_id',
              'competencia_id',
              'area_id'
            ], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'descricao_oportunidade' => 'O nome da oportunidade deve possuir pelo menos 2 caracteres',

            ]
        );
        $oportunidades = new Oportunidade();
        $oportunidades->descricao_oportunidade = $request->descricao_oportunidade;
        $oportunidades->titulo_oportunidade = $request->titulo_oportunidade;
        $oportunidades->requisitos_oportunidade = $request->requisitos_oportunidade;
        $oportunidades->beneficio_oportunidade = $request->beneficio_oportunidade;
        $oportunidades->data_abertura_oportunidade = $request->data_abertura_oportunidade;
        $oportunidades->data_fechamento_oportunidade = $request->data_fechamento_oportunidade;
        $oportunidades->salario_oportunidade = $request->salario_oportunidade;
        $oportunidades->quantidade_oportunidade = $request->quantidade_oportunidade;
        $oportunidades->cidade_id = $request->cidade_id;
        $oportunidades->metodologia_id = $request->metodologia_id;
        $oportunidades->competencia_id = $request->competencia_id;
        $oportunidades->area_id = $request->area_id;
        $oportunidades->save();

        return redirect()->route('oportunidades.index')->with('msg_success','oportunidade Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Oportunidade $oportunidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oportunidade $oportunidade)
    {
        $cidades = Cidade::all();
        $metodologias = Metodologia::all();
        $competencias = Competencia::all();
        $areas = Area::all();
        return view('oportunidades/oportunidadesedit', compact('oportunidade', 'cidades', 'metodologias', 'competencias', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oportunidade $oportunidade)
    {
        $oportunidade->descricao_oportunidade       = $request->descricao_oportunidade;
        $oportunidade->titulo_oportunidade          = $request->titulo_oportunidade;
        $oportunidade->requisitos_oportunidade      = $request->requisitos_oportunidade;
        $oportunidade->beneficio_oportunidade       = $request->beneficio_oportunidade;
        $oportunidade->data_abertura_oportunidade   = $request->data_abertura_oportunidade;
        $oportunidade->data_fechamento_oportunidade = $request->data_fechamento_oportunidade;
        $oportunidade->salario_oportunidade         = $request->salario_oportunidade;
        $oportunidade->quantidade_oportunidade      = $request->quantidade_oportunidade;
        $oportunidade->cidade_id                    = $request->cidade_id;
        $oportunidade->metodologia_id               = $request->metodologia_id;
        $oportunidade->competencia_id               = $request->competencia_id;
        $oportunidade->area_id                      = $request->area_id;
        $oportunidade->save();
        return redirect()->route('oportunidades.index')->with('msg_success','oportunidade Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oportunidade $oportunidade)
    {
        $oportunidade->delete();
        return redirect()->route('oportunidades.index')->with('msg_success','oportunidade Removida com sucesso');
    }

  //  public function oportunidadec()
  //  {
  //      return view('oportunidades/oportunidade');
  //  }
}
