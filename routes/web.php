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
Route::get('/curriculos', [controleradm::class, 'curriculosc'])->name('curriculos');
//Route::get('/competencias', [controleradm::class, 'competenciasc'])->name('competencias');
//Route::get('/interesse', [controleradm::class, 'interessec'])->name('interesse');
//Route::get('/cidades', [controleradm::class, 'cidadesc'])->name('cidades');
Route::get('/metodologias', [controleradm::class, 'metodologiasc'])->name('metodologias');

Route::resource('/adm', controleradm::class); // controlador com as rotas para inserção edição etc
Route::resource('/cidades', CidadeController::class); // controlador para as rotas cidade
//Route::get('/cidade', [CidadeController::class, 'cidadec'])->name('cidade');
Route::resource('/oportunidades', OportunidadeController::class);
Route::get('/oportunidade', [OportunidadeController::class, 'oportunidadec'])->name('oportunidade');
Route::resource('/metodologias', MetodologiaController::class);
Route::resource('/competencias', CompetenciaController::class);
Route::resource('/areas', AreaController::class);
Route::resource('/experiencias', ExperienciaController::class);


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
