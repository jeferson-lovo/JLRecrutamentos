@extends('layouts.principal')

@section('main')
<form action="{{ route('experiencias.update', $experiencia->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome da empresa" name="nome_empresa" value="{{ $experiencia->nome_empresa }}" required class="form-control">
        <input type="text" placeholder="Cargo Inicial" name="cargo_inicio" value="{{ $experiencia->cargo_inicio }}">
        <input type="text" placeholder="Cargo Final" name="cargo_fim" value="{{ $experiencia->cargo_fim }}">
        <input type="text" placeholder="Data Inicial" name="data_inicio" value="{{ $experiencia->data_inicio }}">
        <input type="text" placeholder="Data Final" name="data_fim" value="{{ $experiencia->data_fim }}">
        <input type="text" placeholder="Descricao " name="comentarios_exp" value="{{ $experiencia->comentarios_exp }}">
    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("nome_empresa")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
