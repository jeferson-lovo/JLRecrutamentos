@extends('layouts.principal')

@section('main')
<form action="{{ route('aperfeicoamentos.update', $aperfeicoamento->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="Nome do aperfeicoamento" name="nome_aperfeicoamento" value="{{ $aperfeicoamento->nome_aperfeicoamento }}" required class="form-control">
        <input type="text" placeholder="Nome Entidade" name="nome_entidade_ap" value="{{ $aperfeicoamento->nome_entidade_ap }}">
        <input type="text" placeholder="Carga Horaria" name="carga_horaria_ap" value="{{ $aperfeicoamento->carga_horaria_ap }}">
    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("nome_aperfeicoamento")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
