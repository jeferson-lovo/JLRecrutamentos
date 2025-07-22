@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

@foreach($oportunidades as $op)
<tr>
    <th scope="row">{{ $op->id }}</th>
    <td>{{ $op->descricao_oportunidade}}</td>
    <td>{{ $op->titulo_oportunidade }}</td>
    <td>{{ $op->requisitos_oportunidade }}</td>
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
        <a href="{{ route('oportunidade') }}" class="btn" type="submit">Nova Oportunidade</a>
    </div>   
@endsection