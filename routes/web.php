<?php

use App\Http\Controllers\administrativo;
use App\Http\Controllers\controleradm;
use App\Http\Controllers\AperfeicoamentoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\FormacaoController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\OportunidadeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [controleradm::class, 'homec'])->name('/');
Route::get('/home', [controleradm::class, 'homec'])->name('home');
Route::get('/cidades/{uf}', [CidadeController::class, 'getCidadesPorUf'])->name('cidades.por.uf'); //listar cidades apos selecionar UF
Route::resource('/cidades', CidadeController::class); // controlador para as rotas cidade
Route::resource('/oportunidades', OportunidadeController::class);
Route::resource('/metodologias', MetodologiaController::class);
Route::resource('/competencias', CompetenciaController::class);
Route::resource('/areas', AreaController::class);
Route::resource('/experiencias', ExperienciaController::class);
Route::resource('/aperfeicoamentos', AperfeicoamentoController::class);
Route::resource('/formacoes', FormacaoController::class)->parameters(['formacoes' => 'formacao']);
Route::resource('/curriculos', CurriculoController::class);



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
