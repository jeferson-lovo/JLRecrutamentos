@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperfeicoamento</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($aperfeicoamentos as $ap)
<tr>
    <div>
        <strong>Nome: </strong> {{ $ap->nome_aperfeicoamento}}
    </div>
    <div>
        <strong>Instituição: </strong> {{ $ap->nome_entidade_ap}}
        <strong>Carga Horaria: </strong> {{ $ap->carga_horaria_ap}}
    </div>

    <td>
        <form action="{{ route('aperfeicoamentos.destroy', $ap->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('aperfeicoamentos.edit', $ap->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach
    <br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('aperfeicoamentos.create') }}" class="btn" type="submit">Novo aperfeicoamento</a>
    </div>

    </body>
</html>

@endsection
