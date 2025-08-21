@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodologia</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($metodologias as $mtd)
<tr>
    <div>
        <strong>Nome:</strong> {{ $mtd->nome_metodologia }}
    </div>
    <div>
        <strong>Descrição:</strong> {{ $mtd->descricao_metodologia }}
    </div>

    <td>
        <form action="{{ route('metodologias.destroy', $mtd->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('metodologias.edit', $mtd->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach
    <br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('metodologias.create') }}" class="btn" type="submit">Nova Metodologia</a>
    </div>

    </body>
</html>

@endsection
