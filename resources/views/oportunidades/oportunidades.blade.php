@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidade</title>
</head>
<body>
    @if (session('msg_success'))
        <div>
            {{ session('msg_success')}}
        </div>
    @endif
@foreach($oportunidades as $op)
<tr>
    <div>
        <Strong>Titulo: </Strong> {{ $op->titulo_oportunidade }}
    </div>
    <div>
        <Strong>Decrição: </Strong> {{ $op->descricao_oportunidade}}
    </div>
    <div>
        <strong>Requisitos: </strong> {{ $op->requisitos_oportunidade }}
        <strong>Beneficios: </strong> {{ $op->beneficio_oportunidade }}
    </div>
    <div>
        <strong>Data de Abertura: </strong> {{ \Carbon\Carbon::parse($op->data_abertura_oportunidade)->format('d/m/Y') }}
        <strong>Data de Fechamento: </strong> {{ \Carbon\Carbon::parse($op->data_fechamento_oportunidade)->format('d/m/Y') }}
    </div>
    <div>
        <strong>Media Salarial: </strong> {{ $op->salario_oportunidade }}
    </div>
    <div>
        <strong>Cidade: </strong>
        @foreach($cidades as $cidade)
            @if($cidade->id == $op->cidade_id)
                <td>{{ $cidade->nome_cidades }}</td>
                <td>{{ $cidade->uf_cidade}} </td>
            @endif
        @endforeach
    </div>
    <div>
        <strong>Metodologia: </strong>
        @foreach($metodologias as $metodologia)
            @if($metodologia->id == $op->metodologia_id)
                <td>{{ $metodologia->nome_metodologia }}</td>
            @endif
        @endforeach
    </div>
    <div>
        <strong>Competência: </strong>
        @foreach($competencias as $competencia)
            @if($competencia->id == $op->competencia_id)
                <td>{{ $competencia->nome_competencia }}</td>
            @endif
        @endforeach
    </div>
    <div>
        <strong>Área: </strong>
        @foreach($areas as $area)
            @if($area->id == $op->area_id)
                <td>{{ $area->nome_area }}</td>
            @endif
        @endforeach
    </div>
    <strong>Quantidade de Candidatos: </strong>{{ $op->quantidade_oportunidade }}</td>
    <td>
        <form action="{{ route('oportunidades.destroy', $op->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('oportunidades.edit', $op->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach
<br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('oportunidades.create') }}" class="btn" type="submit">Nova Oportunidade</a>
    </div>
@endsection
