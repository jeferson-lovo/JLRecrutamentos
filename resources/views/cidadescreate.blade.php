@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('adm.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Nome Da Cidade" name="nome_cidades">
            <input type="text" placeholder="UF da Cidade" name="uf_cidade">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        @error('nome_cidades')
        <div class="alert alert-danger my-2" role="alert">

        </div>
        @enderror
        <a href="{{ Route('cidades') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection