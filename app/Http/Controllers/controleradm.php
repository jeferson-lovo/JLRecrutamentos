<?php

namespace App\Http\Controllers;

use App\Models\Oportunidade;
use App\Models\Cidade;
//use App\Models\cidadescreate;
use Illuminate\Http\Request;


class controleradm extends Controller
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
    //    return view('cidadescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     /*   $request->validate(
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
        */

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      //  $cidade = Cidade::find($id);
      //  return view('cidadesedit', compact(['id']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     public function homec()
    {

        return view('home');
    }

     public function curriculosc()
    {
        return view('curriculos');
    }

     public function competenciasc()
    {
        return view('competencias');
    }

     public function interessec()
    {
        return view('interesse');
    }

   //  public function cidadesc()
   // {
   //       $cidades = Cidade::all();
   //     return view('cidades/cidades', compact('cidades'));

  //  }

  ///   public function metodologiasc()
  //  {
  //      return view('metodologias');
  //  }


}
