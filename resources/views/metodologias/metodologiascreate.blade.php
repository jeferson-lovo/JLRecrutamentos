@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('metodologias.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Nome Da Metodologia" name="nome_metodologia">
            @error('nome_metodologia') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <input type="text" placeholder="Descricao da metodologia" name="descricao_metodologia">
            @error('descricao_metodologia') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

        <a href="{{ Route('metodologias.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
