@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($experiencias as $exp)
<tr>
    <th scope="row">{{ $exp->id }}</th>
    <td>{{ $exp->nome_empresa}}</td>
    <td>{{ $exp->cargo_inicio}}</td>
    <td>{{ $exp->cargo_fim}}</td>
    <td>{{ $exp->data_inicio}}</td>
    <td>{{ $exp->data_fim}}</td>
    <td>{{ $exp->comentarios_exp}}</td>
    <td>
        <form action="{{ route('experiencias.destroy', $exp->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('experiencias.edit', $exp->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('experiencias.create') }}" class="btn" type="submit">Nova experiencia</a>
    </div>

    </body>
</html>

@endsection
