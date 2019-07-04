@extends('principal')

@section('titulo', 'Exibir Exame')

@section('conteudo')

  <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/health-checkup-filled.png">Exibir Exame: {{ $test->id }}</h1>

  <p>Código: {{ $test->id }}</p>
  <p><img src="https://img.icons8.com/material-rounded/24/000000/name.png">
    @foreach($user as $u) 
      @if ( $test->user_id == $u->id)
        {{ $u->name }} 
      @endif
    @endforeach
  </p>
  <p>Procedimento: 
    @foreach($procedur as $p) 
      @if ( $test->procedur_id == $p->id)
        {{ $p->name }} 
      @endif
    @endforeach
  </p>
  <p>Data: {{ $test->date }}</p>

  <div class="row">
    <div class="form-group col-md-1">
      <!-- Voltar para a lista de tests //-->
      <a class="btn btn-outline-primary" href="{{ route('tests.index') }}">Voltar</a>
    </div>
    <div class="form-group col-md-1">
      <!-- Editar o estado corrente //-->
      <a class="btn btn-warning" href="{{ route('tests.edit', $test->id) }}">Editar</a>
    </div>
    <div class="form-group col-md-1">
      <!-- Excluir o estado corrente //-->
      <form method="post" action="{{ route('tests.destroy', $test->id) }}" onsubmit="return confirm('Confirma exclusão do Exame?');" >

        @csrf
        @method('DELETE')

        <input class="btn btn-danger" type="submit" value="Excluir">

      </form>
    </div>
  </div>
  

@endsection
