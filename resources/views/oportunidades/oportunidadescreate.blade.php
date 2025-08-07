@extends('layouts.principal')

@section('main')
<div class="container">
    <form action="{{ Route('oportunidades.store') }} " method="post">
        @csrf  <!-- envia token para segurança para conseguir salvar um formulario-->
        <div class="input-group">
            <input type="text" placeholder="Descricao Oportunidade" name="descricao_oportunidade">
            @error('descricao_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Titulo Oportunidade" name="titulo_oportunidade">
            @error('titulo_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Requisitos Oportunidade" name="requisitos_oportunidade">
            @error('requisitos_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Beneficio Oportunidade" name="beneficio_oportunidade">
            @error('beneficio_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Data abertura oportunidade" name="data_abertura_oportunidade">
            @error('data_abertura_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="Data fechamento oportunidade" name="data_fechamento_oportunidade">
            @error('data_fechamento_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="salario oportunidade" name="salario_oportunidade">
            @error('salario_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" placeholder="quantidade oportunidade" name="quantidade_oportunidade">
            @error('quantidade_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
             <input type="text" placeholder="cidade_id" name="cidade_id">
            @error('cidade_id') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
             <input type="text" placeholder="metodologia_id" name="metodologia_id">
            @error('metodologia_id') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
             <input type="text" placeholder="competencia_id" name="competencia_id">
            @error('competencia_id') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
             <input type="text" placeholder="area_id" name="area_id">
            @error('area_id') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <a href="{{ Route('oportunidades.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
