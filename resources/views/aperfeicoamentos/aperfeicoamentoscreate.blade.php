@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('aperfeicoamentos.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Nome Do aperfeicoamento" name="nome_aperfeicoamento">
            @error('nome_aperfeicoamento') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Nome da Entidade" name="nome_entidade_ap">
            @error('nome_entidade_ap') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="ccarga horaria " name="carga_horaria_ap">
            @error('carga_horaria_ap') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <a href="{{ Route('aperfeicoamentos.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
