<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administrativo extends Controller
{
    public function homec()
    {
        return view('home');
    }

    public function oportunidadesc()
    {
        return view('oportunidades');
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
        return view('cidades');
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

