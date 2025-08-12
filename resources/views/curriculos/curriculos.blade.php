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
@foreach($curriculos as $cr)
<tr>
    <th scope="row">{{ $cr->id }}</th>
    <td>{{ $cr->nome_curriculo}}</td>
    <td>{{ $cr->sexo_curriculo }}</td>
    <td>{{ $cr->nacionalidade_curriculo }}</td>
    <td>{{ $cr->cidade_atual_curriculo }}</td>
    <td>{{ $cr->uf_atual_curriculo }}</td>
    <td>{{ $cr->telefone_curriculo }}</td>
    <td>{{ $cr->email_curriculo }}</td>
    <td>{{ $cr->linkedin }}</td>
    <td>{{ $cr->instagran }}</td>
    <td>{{ $cr->site_curriculo }}</td>
    <td>{{ $cr->atualizacao_curriculo }}</td>
    <td>{{ $cr->comentario_rh }}</td>
    <td>{{ $cr->nota_rh }}</td>
    <td>{{ $cr->cidade_id }}</td>
    <td>{{ $cr->metodologia_id }}</td>
    <td>{{ $cr->competencia_id }}</td>
    <td>{{ $cr->area_id }}</td>
    <td>{{ $cr->experiencia_id }}</td>
    <td>{{ $cr->aperfeicoamento_id }}</td>
    <td>{{ $cr->formacao_id }}</td>
    <td>
        <form action="" method="post">
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

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('curriculos.create') }}" class="btn" type="submit">Novo curriculo</a>
    </div>
@endsection
