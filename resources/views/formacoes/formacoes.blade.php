@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formacao</title>
</head>
<body>
    @if (session('msg_success'))
    <div>
        {{ session('msg_success')}}
    </div>
    @endif

@foreach($formacoes as $form)
<tr>
    <th scope="row">{{ $form->id }}</th>
    <td>{{ $form->nivel_formacao}}</td>
    <td>{{ $form->nome_curso}}</td>
    <td>{{ $form->nome_entidade}}</td>
    <td>{{ $form->modalidade }}</td>
    <td>{{ $form->situacao }}</td>
    <td>{{ $form->data_inicio_form }}</td>
    <td>{{ $form->data_fim_form }}</td>
    <td>{{ $form->obs_formacao }}</td>
    <td>
        <form action="{{ route('formacoes.destroy', $form->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Excluir
            </button>
            <a class="btn btn-primary btn-sm active" href="">
                Detalhes
            </a>
            <a class="btn btn-secondary btn-sm active" href="{{ route('formacoes.edit', $form->id)}}">
                Editar
            </a>
        </form>
    </td>

</tr>
@endforeach

    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('formacoes.create') }}" class="btn" type="submit">Nova Formacao</a>
    </div>

    </body>
</html>

@endsection
