@extends('layouts.principal')

@section('main')
<form action="{{ route('oportunidades.update', $oportunidade->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="descricao oportunidade"  name="descricao_oportunidade"       value="{{ $oportunidade->descricao_oportunidade }}" required class="form-control">
        <input type="text" placeholder="titulo oportunidade"     name="titulo_oportunidade"          value="{{ $oportunidade->titulo_oportunidade }}">
        <input type="text" placeholder="requisitos oportunidade" name="requisitos_oportunidade"      value="{{ $oportunidade->requisitos_oportunidade }}">
        <input type="text" placeholder="beneficio oportunidade"  name="beneficio_oportunidade"       value="{{ $oportunidade->beneficio_oportunidade }}">
        <input type="date" placeholder="data abertura"           name="data_abertura_oportunidade"   value="{{ $oportunidade->data_abertura_oportunidade }}">
        <input type="date" placeholder="data fechamento"         name="data_fechamento_oportunidade" value="{{ $oportunidade->data_fechamento_oportunidade }}">
        <input type="text" placeholder="salario oportunidade"    name="salario_oportunidade"         value="{{ $oportunidade->salario_oportunidade }}">
        <input type="text" placeholder="quantidade oportunidade" name="quantidade_oportunidade"      value="{{ $oportunidade->quantidade_oportunidade }}">

        <select name="cidade_id" class="form-control">
            @foreach($cidades as $cidade)
            <option value="{{ $cidade->id }}" {{ $cidade->id == $oportunidade->cidade_id ? 'selected' : '' }}>
                {{ $cidade->nome_cidades }}
            </option>
            @endforeach
        </select>

        <select name="metodologia_id" class="form-control">
            @foreach($metodologias as $metodologia)
            <option value="{{ $metodologia->id }}" {{ $metodologia->id == $oportunidade->metodologia_id ? 'selected' : '' }}>
                {{ $metodologia->nome_metodologia }}
            </option>
            @endforeach
        </select>

        <select name="competencia_id" class="form-control">
            @foreach($competencias as $competencia)
            <option value="{{ $competencia->id }}" {{ $competencia->id == $oportunidade->competencia_id ? 'selected' : '' }}>
                {{ $competencia->nome_competencia }}
            </option>
            @endforeach
        </select>

        <select name="area_id" class="form-control">
            @foreach($areas as $area)
            <option value="{{ $area->id }}" {{ $area->id == $oportunidade->area_id ? 'selected' : '' }}>
                {{ $area->nome_area}}
            </option>
            @endforeach
        </select>

    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("descricao_oportunidade")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
