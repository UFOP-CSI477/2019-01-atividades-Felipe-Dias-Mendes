<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <!-- Exibir mensagens -> campo: mensagem //-->
    @if( Session::has('mensagem') )
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif

    <!-- Barra de Navegação //-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="mx-auto"> 
  
      <ul class="nav nav-pills justify-content-end">
        <li>
          <h2 style="float = left; margin-right: 500px;"><span style="color: #87CEFA;">Academico</span></h2>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Página Principal</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="/welcome">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/alunos/listar">Listar</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="/regioes">Regiões</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="/estados">Estados</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="/cidades">Cidades</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-3">
    <!-- Conteúdo - parte central //-->
    @yield('conteudo')
  </div>


  </body>
</html>
