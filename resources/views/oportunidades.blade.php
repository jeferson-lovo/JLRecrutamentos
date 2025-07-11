@extends('layouts.principal')  <!-- aqui coloca a pasta onde esta o tamplate . o nome do tamplate -->

@section('main')

<h1>Oportunidades </h1>
<h3>oportundade 1 </h3>
<h3>oportundade 2 </h3>
<h3>oportundade 3 </h3>
    <div class="btn">
        <!--   <input type="submit" value="Entrar" class="btn" > -->
        <a href="{{ route('oportunidade') }}" class="btn" type="submit">Nova Oportunidade</a>
    </div>   
@endsection