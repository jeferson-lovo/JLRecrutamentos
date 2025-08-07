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
    <th scope="row">{{ $op->id }}</th>
    <td>{{ $op->descricao_oportunidade}}</td>
    <td>{{ $op->titulo_oportunidade }}</td>
    <td>{{ $op->requisitos_oportunidade }}</td>
    <td>{{ $op->beneficio_oportunidade }}</td>
    <td>{{ $op->data_abertura_oportunidade }}</td>
    <td>{{ $op->data_fechamento_oportunidade }}</td>
    <td>{{ $op->salario_oportunidade }}</td>
    <td>{{ $op->quantidade_oportunidade }}</td>
    <td>{{ $op->cidade_id }}</td>
    <td>{{ $op->metodologia_id }}</td>
    <td>{{ $op->competencia_id }}</td>
    <td>{{ $op->area_id }}</td>
    <td>
        <form action="" method="post">
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('oportunidades.edit') }}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('oportunidades.create') }}" class="btn" type="submit">Nova Oportunidade</a>
    </div>
@endsection
