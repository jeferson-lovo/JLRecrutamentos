<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
})->name('oportunidades');

Route::get('/curriculos', function () {
    return view('curriculos');
});

Route::get('/competencias', function () {
    return view('competencias');
});

Route::get('/interesse', function () {
    return view('interesse');
});

Route::get('/cidades', function () {
    return view('cidades');
});

Route::get('/metodologias', function () {
    return view('metodologias');
});

Route::get('/oportunidade', function () {
    return view('oportunidade');
})->name('oportunidade');
/*

exemplos de rotas com parametros 
Route::get('/hello/{parametro}/{parametro1}', function($parametro, $parametro1) {
    return "retorna parametros, $parametro $parametro1 ";
});

Route::get('/hello1/{parametro}/{parametro1?}', function($parametro, $parametro1=null) {
    if (isset($parametro1))
        return "retorna parametros, $parametro $parametro1 ";
    return "parametro sem sobrenome";
});

Route::get('/hello2/{parametro}/{numero}', function($parametro, $numero) {
    for($i=0; $i<$numero;$i++){
        return "retorna parametros, $parametro $numero";    
    } 
    
})->where('parametro', '[A-Za-z]+')
  ->where('numero', '[0-9]+');

  */
  Route::get('/cidade', function () {
    return view('cidade');
});