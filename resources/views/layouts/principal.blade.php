<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- aqui coloca CSS e BootStrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>JL Recrutamentos</title>
</head>

<body>
<nav>
  <ul>
    <li>
      <img src="{{ asset('img/LogoJL1.png') }}" alt="Logo JLRecrutamento" width="100" height="50">
    </li>
    <li><a href="{{ route('oportunidades.index') }}">Oportunidades</a></li>
    <li><a href="{{ route('curriculos.index') }}">Curriculos</a></li>
    <li><a href="{{ route('cidades.index') }}">Cidades</a></li>
    <li><a href="{{ route('metodologias.index')}}">Metodologias</a></li>
    <li><a href="{{ route('competencias.index')}}">Competencias</a></li>
    <li><a href="{{ route('areas.index')}}">Areas</a></li>
    <li><a href="{{ route('experiencias.index')}}">Experiencias</a></li>
    <li><a href="{{ route('aperfeicoamentos.index')}}">Aperfeiçõamentos</a></li>
    <li><a href="{{ route('formacoes.index')}}">Formações</a></li>
  </ul>
</nav>



    <main role="main"> <!-- aqui vai as paginas a parte de cima é o tamplate -->
        @yield('main')
    </main>

    <nav class="nav-rodape">
      <ul>
        <li>Sobre nós</li>
        <li>Contato</li>
        <li>Desenvolvido por Jeferson Lovo</li>
      </ul>
    </nav>
</body>
</html>
