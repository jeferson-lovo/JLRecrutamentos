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
});

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