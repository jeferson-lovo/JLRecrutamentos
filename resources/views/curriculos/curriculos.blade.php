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
                    <p>
                        <strong>Nacionalidade: </strong> {{ $cr->nacionalidade_curriculo }}
                        <strong>Cidade Atual: </strong> {{ $cr->cidade_atual_curriculo }}
                        <strong>UF: </strong> {{ $cr->uf_atual_curriculo }}
                    </p>
                    <p>
                        <strong>Celular: </strong> {{ $cr->telefone_curriculo }}
                        <strong>E-Mail: </strong> {{ $cr->email_curriculo }}
                    </p>
                    <p>
                        <strong>Linkedin: </strong> {{ $cr->linkedin }}
                        <strong>Instagran: </strong> {{ $cr->instagran }}
                    </p>
                    <p>
                        <strong>Site: </strong> {{ $cr->site_curriculo }}
                    </p>

                </div>

                <div class="card-body">
                    <p><strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($cr->atualizacao_curriculo)->format('d/m/Y') }}</p>

                    </p>
                    <p>
                        <div>
                            <strong>Cidade: </strong>
                            @foreach($cidades as $cidade)
                                @if($cidade->id == $cr->cidade_id)
                                    <td>{{ $cidade->nome_cidades }}</td>
                                    <td>{{ $cidade->uf_cidade}} </td>
                                @endif
                            @endforeach

                        <strong>Competencias: </strong>
                        @foreach($competencias as $competencia)
                            @if($competencia->id == $cr->competencia_id)
                                <td>{{ $competencia->nome_competencia }}</td>
                            @endif
                        @endforeach
                    </div>
                    </p>
                    <div>
                        <p>
                            <strong>Metodologia: </strong>
                            @foreach($metodologias as $metodologia)
                                @if($metodologia->id == $cr->metodologia_id)
                                    <td>{{ $metodologia->nome_metodologia }}</td>
                                @endif
                            @endforeach

                        <strong>Área de Atuação: </strong>
                        @foreach($areas as $area)
                            @if($area->id == $cr->area_id)
                                <td>{{ $area->nome_area }}</td>
                            @endif
                        @endforeach
                        </p>
                    </div>
                    <div>
                        <p>
                        <strong>Experiência: </strong>
                        @foreach($experiencias as $experiencia)
                            @if($experiencia->id == $cr->experiencia_id)
                                <td>{{ $experiencia->nome_empresa }}</td>
                            @endif
                        @endforeach
                        </p>
                    </div>
                    <div>
                        <p>
                        <strong>Aperfeiçoamento: </strong>
                        @foreach($aperfeicoamentos as $aperfeicoamento)
                            @if($aperfeicoamento->id == $cr->aperfeicoamento_id)
                                <td>{{ $aperfeicoamento->nome_aperfeicoamento }}</td>
                            @endif
                        @endforeach
                        </p>
                    </div>
                    <div>
                        <p>
                        <strong>Formação: </strong>
                        @foreach($formacoes as $formacao)
                            @if($formacao->id == $cr->formacao_id)
                                <td>{{ $formacao->nome_curso }}</td>
                            @endif
                        @endforeach
                        </p>
                    </div>
                    <div class="Curriculo-RH">
                        <strong>Comentarios: </strong> {{ $cr->comentario_rh }}
                        <strong>Nota: </strong> {{ $cr->nota_rh }}
                        <br>
                    </div>
                    <br>
                                {{-- Adicione outros campos aqui --}}
                </div>
            </div>
        @endforeach
    </div>

@foreach($curriculos as $cr)
<tr>
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
