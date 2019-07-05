<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title >@yield('titulo', 'Analyses')</title>

    <link rel="icon" type="image/png" href="https://img.icons8.com/ios/50/000000/test-results-filled.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
          <a href="/">
            <h2 style="float = left; margin-right: 500px;">
              <span style="color: #87CEFA;">
                <img width="40px" height="40px" src="https://img.icons8.com/ios/50/000000/test-results-filled.png">Analyses
              </span>
            </h2>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Área Geral</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="/tests">Exames</a>
        </li>
        <li class="nav-item">    
          <a class="nav-link" href="/procedurs">Procedimentos</a>
        </li>
        <li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
