@extends('layouts.principal')

@section('main')
<form action="{{ route('formacoes.update', $formacao->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome da formacao" name="nivel_formacao" value="{{ $formacao->nivel_formacao }}" required class="form-control">
        <input type="text" placeholder="Nome curso" name="nome_curso" value="{{ $formacao->nome_curso }}">
        <input type="text" placeholder="Nome entidade" name="nome_entidade" value="{{ $formacao->nome_entidade }}">
        <input type="text" placeholder="modalidade" name="modalidade" value="{{ $formacao->modalidade }}">
        <input type="text" placeholder="situacao" name="situacao" value="{{ $formacao->situacao }}">
        <input type="text" placeholder="data inicio" name="data_inicio_form" value="{{ $formacao->data_inicio_form }}">
        <input type="text" placeholder="data fim" name="data_fim_form" value="{{ $formacao->data_fim_form }}">
        <input type="text" placeholder="observacao" name="obs_formacao" value="{{ $formacao->obs_formacao }}">
    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("nivel_formacao")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
