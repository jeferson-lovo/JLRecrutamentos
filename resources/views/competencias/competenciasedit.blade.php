@extends('layouts.principal')

@section('main')
<form action="{{ route('competencias.update', $competencia->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome da Competencia" name="nome_competencia" value="{{ $competencia->nome_competencia }}" required class="form-control">
        <input type="text" placeholder="Descricao da competencia" name="descricao_competencia" value="{{ $competencia->descricao_competencia }}">
    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("nome_cidades")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
