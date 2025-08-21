@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($areas as $ar)
<tr>
    <div>
        <strong>Area: </strong> {{ $ar->nome_area}}
    </div>
    <div>
        <strong>Descrição: </strong> {{ $ar->descricao_area}}
    </div>

    <td>
        <form action="{{ route('areas.destroy', $ar->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('areas.edit', $ar->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach
    <br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('areas.create') }}" class="btn" type="submit">Nova areas</a>
    </div>

    </body>
</html>

@endsection
