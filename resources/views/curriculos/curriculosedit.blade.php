@extends('layouts.principal')

@section('main')
<form action="{{ route('curriculos.update', $curriculo->id)}}" method="POST"> <!-- Html só envia requisição post e Get -->
    <!-- Roteamento do laravel para enviar a requisição put por html -->
    @csrf
    @method('PUT')
    <div class="input-group">
        <input type="text" placeholder="nome"  name="nome_curriculo"       value="{{ $curriculo->nome_curriculo }}" required class="form-control">
        <input type="text" placeholder="sexo"     name="sexo_curriculo"          value="{{ $curriculo->sexo_curriculo }}">
        <input type="text" placeholder="nacionalidade" name="nacionalidade_curriculo"      value="{{ $curriculo->nacionalidade_curriculo }}">
        <input type="text" placeholder="cidade"  name="cidade_atual_curriculo"       value="{{ $curriculo->cidade_atual_curriculo }}">
        <input type="text" placeholder="uf"           name="uf_atual_curriculo"   value="{{ $curriculo->uf_atual_curriculo }}">
        <input type="text" placeholder="telefone"         name="telefone_curriculo" value="{{ $curriculo->telefone_curriculo }}">
        <input type="text" placeholder="email"    name="email_curriculo"         value="{{ $curriculo->email_curriculo }}">
        <input type="text" placeholder="linkedin" name="linkedin"      value="{{ $curriculo->linkedin }}">
        <input type="text" placeholder="instagran" name="instagran"      value="{{ $curriculo->instagran }}">
        <input type="text" placeholder="site" name="site_curriculo"      value="{{ $curriculo->site_curriculo }}">
        <input type="text" placeholder="atualizacao curriculo" name="atualizacao_curriculo"      value="{{ $curriculo->atualizacao_curriculo }}">
        <input type="text" placeholder="comentario" name="comentario_rh"      value="{{ $curriculo->comentario_rh }}">
        <input type="text" placeholder="nota" name="nota_rh"      value="{{ $curriculo->nota_rh }}">

        <select name="cidade_id" class="form-control">
            @foreach($cidades as $cidade)
            <option value="{{ $cidade->id }}" {{ $cidade->id == $curriculo->cidade_id ? 'selected' : '' }}>
                {{ $cidade->nome_cidades }}
            </option>
            @endforeach
        </select>

        <select name="metodologia_id" class="form-control">
            @foreach($metodologias as $metodologia)
            <option value="{{ $metodologia->id }}" {{ $metodologia->id == $curriculo->metodologia_id ? 'selected' : '' }}>
                {{ $metodologia->nome_metodologia }}
            </option>
            @endforeach
        </select>

        <select name="competencia_id" class="form-control">
            @foreach($competencias as $competencia)
            <option value="{{ $competencia->id }}" {{ $competencia->id == $curriculo->competencia_id ? 'selected' : '' }}>
                {{ $competencia->nome_competencia }}
            </option>
            @endforeach
        </select>

        <select name="area_id" class="form-control">
            @foreach($areas as $area)
            <option value="{{ $area->id }}" {{ $area->id == $curriculo->area_id ? 'selected' : '' }}>
                {{ $area->nome_area}}
            </option>
            @endforeach
        </select>

        <select name="experiencia_id" class="form-control">
            @foreach($experiencias as $experiencia)
            <option value="{{ $experiencia->id }}" {{ $experiencia->id == $curriculo->experiencia_id ? 'selected' : '' }}>
                {{ $experiencia->nome_empresa}}
            </option>
            @endforeach
        </select>

        <select name="aperfeicoamento_id" class="form-control">
            @foreach($aperfeicoamentos as $aperfeicoamento)
            <option value="{{ $aperfeicoamento->id }}" {{ $aperfeicoamento->id == $curriculo->aperfeicoamento_id ? 'selected' : '' }}>
                {{ $aperfeicoamento->nome_aperfeicoamento }}
            </option>
            @endforeach
        </select>

        <select name="formacao_id" class="form-control">
            @foreach($formacoes as $formacao)
            <option value="{{ $formacao->id }}" {{ $formacao->id == $curriculo->formacao_id ? 'selected' : '' }}>
                {{ $formacao->nome_curso}}
            </option>
            @endforeach
        </select>

    </div>
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </div>
    @error("nome_curriculo")
    <div class="alert alert-danger my-2 " role="alert">

    </div>
    @enderror
</form>
<a href="" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar Edição</a>

@endsection
