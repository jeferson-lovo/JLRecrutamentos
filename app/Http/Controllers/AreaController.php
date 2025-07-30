<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all();
        return view('areas/areas', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('areas/areascreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 'nome_area' => 'required|min:3|unique:areas',
              'descricao_area' => 'required|min:4'], //aqui vai o nome do campo do formulario e nao o campo da tabela do banco de dados
            [
                'nome_area' => 'O nome da area deve possuir pelo menos 3 caracteres',
                'nome_area' => 'Já possui uma area com esse nome, verifique na lista de competencias cadastradas',
                'descricao_area' => 'O campo Descrição deve conter Pelo Menos 4 caracteres'
            ]
        );
        $areas = new Area();
        $areas->nome_area = $request->nome_area;
        $areas->descricao_area = $request->descricao_area;
        $areas->save();

        return redirect()->route('areas.index')->with('msg_success','area Cadastrada com sucesso');
        // essa mensagem vai para o @if (session('msg_success')) dentro da view retornada
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('areas/areasedit', compact(['area']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $area->nome_area = $request->nome_area;
        $area->descricao_area = $request->descricao_area;
        $area->save();
        return redirect()->route('areas.index')->with('msg_success','area Alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index')->with('msg_success','area Removida com sucesso');
    }
}
