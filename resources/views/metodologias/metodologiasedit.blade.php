@extends('layouts.principal')

@section('main')
<form action="{{ route('metodologias.update', $metodologia->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome da Metodologia" name="nome_metodologia" value="{{ $metodologia->nome_metodologia }}" required class="form-control">
        <input type="text" placeholder="Descricao da Metodologia" name="descricao_metodologia" value="{{ $metodologia->descricao_metodologia }}">
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
