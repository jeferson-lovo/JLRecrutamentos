<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- aqui coloca CSS e BootStrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <style>
  nav {
    background-color: #4169E1;
    overflow: hidden; /* Para evitar que o conteúdo transborde */
  }

  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  nav li {
    float: left; /* Faz os itens ficarem lado a lado */
  }

  nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  nav li a:hover {
    background-color: #000080;
    color: #FFFF00;
  }
</style>
    <title>JL Recrutamentos</title>
</head>

<body>
<nav>
  <ul>
    <li>
      <img src="{{ asset('img/Logo1.png') }}" alt="Logo JLRecrutamento" width="100" height="50">
    </li>
    <li><a href="#">login</a></li>
    <li><a href="#">Sobre</a></li>
    <li><a href="#">Serviços</a></li>
    <li><a href="#">Contato</a></li>
  </ul>
</nav>

      <img src="{{ asset('img/Logo1.png') }}" alt="Logo JLRecrutamento" width="100" height="50">
    <h1>Home</h1>
    <h1>Curriculos</h1>
    <h1>Oportunidades</h1>
    <h1>cadastros</h1>

    <main role="main"> <!-- aqui vai as paginas a parte de cima é o tamplate -->
        @yield('main')
    </main> 
</body>
</html>