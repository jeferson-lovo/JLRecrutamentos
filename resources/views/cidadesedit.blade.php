@extends('layouts.principal')

@section('main')
<form action="{{ route('cidade.update', $cidade->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome da Cidade" name="nome_cidades" value="{{ $cidade->nome_cidades }}" required class="form-control">
        <input type="text" placeholder="UF da Cidade" name="uf_cidade" value="{{ $cidade->uf_cidade }}">
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
