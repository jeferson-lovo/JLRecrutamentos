@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('competencias.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Nome Da Competencia" name="nome_competencia">
            @error('nome_competencia') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <input type="text" placeholder="Descricao da competencia" name="descricao_competencia">
            @error('descricao_competencia') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

        <a href="{{ Route('competencias.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
