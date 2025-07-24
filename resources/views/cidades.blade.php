@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach($cidades as $cd)
<tr>
    <th scope="row">{{ $cd->id }}</th>
    <td>{{ $cd->nome_cidades}}</td>
    <td>{{ $cd->uf_cidade }}</td>
    <td>
        <form action="" method="post">
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('adm.create') }}" class="btn" type="submit">Nova Cidade</a>
    </div>   

    </body>
</html>

@endsection