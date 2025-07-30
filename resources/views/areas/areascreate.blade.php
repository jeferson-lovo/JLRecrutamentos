@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('areas.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Nome Da Area" name="nome_area">
            @error('nome_area') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <input type="text" placeholder="Descricao da area" name="descricao_area">
            @error('descricao_area') <!-- aqui traz o erro definido no controlador -->
        <div class="alert alert-danger my-2" role="alert">
            {{ $message }}
        </div>
        @enderror
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

        <a href="{{ Route('areas.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
