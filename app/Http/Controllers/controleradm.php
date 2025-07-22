<?php

namespace App\Http\Controllers;

use App\Models\Oportunidade;
use App\Models\Cidade;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function oportunidadesc()
    {
        $oportunidades = Oportunidade::all();
        return view('oportunidades', compact('oportunidades'));
    }

     public function oportunidadec()
    {
        return view('oportunidade');
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

     public function cidadesc()
    {
          $cidades = Cidade::all();
        return view('cidades', compact('cidades'));
        
    }

     public function metodologiasc()
    {
        return view('metodologias');
    }

     public function cidadec()
    {
        return view('cidade');
    }
}
