@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competencia</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($competencias as $cpt)
<tr>
    <th scope="row">{{ $cpt->id }}</th>
    <td>{{ $cpt->nome_competencia}}</td>
    <td>{{ $cpt->descricao_competencia}}</td>
    <td>
        <form action="{{ route('competencias.destroy', $cpt->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('competencias.edit', $cpt->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('competencias.create') }}" class="btn" type="submit">Nova competencia</a>
    </div>

    </body>
</html>

@endsection
