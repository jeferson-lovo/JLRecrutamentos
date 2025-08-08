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
            <input type="date" placeholder="Data abertura oportunidade" name="data_abertura_oportunidade">
            @error('data_abertura_oportunidade') <!-- aqui traz o erro definido no controlador -->
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="date" placeholder="Data fechamento oportunidade" name="data_fechamento_oportunidade">
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

            <select name="cidade_id" class="form-control">
                @foreach($cidades as $cidade)
                    <option value="{{ $cidade->id }}" {{ $cidade->id == $cidade->cidade_id ? 'selected' : '' }}>
                        {{ $cidade->nome_cidades }}
                    </option>
                @endforeach
            </select>

            <select name="metodologia_id" class="form-control">
                @foreach($metodologias as $metodologia)
                    <option value="{{ $metodologia->id }}" {{ $metodologia->id == $metodologia->metodologia_id ? 'selected' : '' }}>
                        {{ $metodologia->nome_metodologia }}
                    </option>
                @endforeach
            </select>

            <select name="competencia_id" class="form-control">
                @foreach($competencias as $competencia)
                    <option value="{{ $competencia->id }}" {{ $competencia->id == $competencia->competencia_id ? 'selected' : '' }}>
                        {{ $competencia->nome_competencia }}
                    </option>
                @endforeach
            </select>

            <select name="area_id" class="form-control">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ $area->id == $area->area_id ? 'selected' : '' }}>
                        {{ $area->nome_area }}
                    </option>
                @endforeach
            </select>

            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <a href="{{ Route('oportunidades.index') }}" class="btn btn-secondary ml-1" role="button" aria-pressed="true" >Cancelar </a>
    </form>
</div>

@endsection
