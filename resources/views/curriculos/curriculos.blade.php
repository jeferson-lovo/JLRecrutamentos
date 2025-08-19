@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculos</title>
</head>
<body>
    @if (session('msg_success'))
        <div>
            {{ session('msg_success')}}
        </div>
    @endif

    <div class="card-container">
        @foreach($curriculos as $cr)
            <div class="card">
                <div class="card-header">
                    <h3> Curriculo </h3>
                </div>
                <div class="card-body">
                    <p>
                        <strong>Nome:</strong> {{ $cr->nome_curriculo }}
                        <strong>Gênero:</strong> {{ $cr->sexo_curriculo }}
                    </p>

                </div>
                <div class="card-body">

                    <p><strong>Data de Nascimento:</strong>
                        @if ($cr->data_nascimento_curriculo)
                            {{ $cr->data_nascimento_curriculo->format('d/m/Y') }}
                        @else
                            Não informada
                        @endif
                    </p>
                    {{-- Adicione outros campos aqui --}}
                </div>
            </div>
        @endforeach
    </div>

@foreach($curriculos as $cr)
<tr>
    <div class="">
        <div>
            <td>{{ $cr->sexo_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->nacionalidade_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->cidade_atual_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->uf_atual_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->telefone_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->email_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->linkedin }}</td>
        </div>
        <div>
            <td>{{ $cr->instagran }}</td>
        </div>
        <div>
            <td>{{ $cr->site_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->atualizacao_curriculo }}</td>
        </div>
        <div>
            <td>{{ $cr->comentario_rh }}</td>
        </div>
        <div>
            <td>{{ $cr->nota_rh }}</td>
        </div>
        <div>
            @foreach($cidades as $cidade)
                @if($cidade->id == $cr->cidade_id)
                    <td>{{ $cidade->nome_cidades }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($competencias as $competencia)
                @if($competencia->id == $cr->competencia_id)
                    <td>{{ $competencia->nome_competencia }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($metodologias as $metodologia)
                @if($metodologia->id == $cr->metodologia_id)
                    <td>{{ $metodologia->nome_metodologia }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($areas as $area)
                @if($area->id == $cr->area_id)
                    <td>{{ $area->nome_area }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($experiencias as $experiencia)
                @if($experiencia->id == $cr->experiencia_id)
                    <td>{{ $experiencia->nome_empresa }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($aperfeicoamentos as $aperfeicoamento)
                @if($aperfeicoamento->id == $cr->aperfeicoamento_id)
                    <td>{{ $aperfeicoamento->nome_aperfeicoamento }}</td>
                @endif
            @endforeach
        </div>
        <div>
            @foreach($formacoes as $formacao)
                @if($formacao->id == $cr->formacao_id)
                    <td>{{ $formacao->nome_formacao }}</td>
                @endif
            @endforeach
        </div>
    </div>


        <form action="{{ route('curriculos.destroy', $cr->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('curriculos.edit', $cr->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach
    <br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('curriculos.create') }}" class="btn" type="submit">Novo curriculo</a>
    </div>
@endsection
