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
    <div>
        <strong>Nivel: </strong> {{ $form->nivel_formacao}}
    </div>
    <div>
        <strong>Curso: </strong> {{ $form->nome_curso}}
    </div>
    <div>
        <strong>Instituição: </strong> {{ $form->nome_entidade}}
    </div>

    <div>
        <strong>Modalidade: </strong> {{ $form->modalidade}}
    </div>
    <div>
        <strong>Situação: </strong> {{ $form->situacao}}
    </div>
    <div>
        <strong>Data de Início: </strong> {{ \Carbon\Carbon::parse($form->data_inicio_form)->format('d/m/Y') }}

    </div>
    <div>
        <strong>Data de Fim: </strong> {{ \Carbon\Carbon::parse($form->data_fim_form)->format('d/m/Y') }}
    </div>
    <div>
        <strong>Observação: </strong> {{ $form->obs_formacao}}
    </div>

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
    <br>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('formacoes.create') }}" class="btn" type="submit">Nova Formacao</a>
    </div>

    </body>
</html>

@endsection
