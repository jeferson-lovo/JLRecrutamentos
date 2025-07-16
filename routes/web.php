<?php

use App\Http\Controllers\administrativo;
use App\Http\Controllers\controleradm;
use Illuminate\Support\Facades\Route;


Route::get('/', [controleradm::class, 'homec'])->name('/');
Route::get('/home', [controleradm::class, 'homec'])->name('home');
Route::get('/oportunidades', [controleradm::class, 'oportunidadesc'])->name('oportunidades');
Route::get('/oportunidade', [controleradm::class, 'oportunidadec'])->name('oportunidade');
Route::get('/curriculos', [controleradm::class, 'curriculosc'])->name('curriculos');
Route::get('/competencias', [controleradm::class, 'competenciasc'])->name('competencias');
Route::get('/interesse', [controleradm::class, 'interessec'])->name('interesse');
Route::get('/cidades', [controleradm::class, 'cidadesc'])->name('cidades');
Route::get('/metodologias', [controleradm::class, 'metodologiasc'])->name('metodologias');
Route::get('/cidade', [controleradm::class, 'cidadec'])->name('cidade');
Route::resource('/adm', controleradm::class); // controlador com as rotas para inserção edição etc 


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
