@extends('principal')

@section('titulo', 'Exibir Procedimento')

@section('conteudo')

  <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/process-filled.png">Exibir Procedimento: {{ $procedur->name }}</h1>

  <p>Código: {{ $procedur->id }}</p>
  <p>Nome: {{ $procedur->name }}</p>
  <p>Preço: <img class="mr-1" height="20px" width="20px" src="https://img.icons8.com/material-rounded/24/000000/real.png">{{ $procedur->price }}</p>
  
  <p><img src="https://img.icons8.com/material-rounded/24/000000/name.png">
    @foreach($user as $u) 
      @if ( $procedur->user_id == $u->id)
        {{ $u->name }} 
      @endif
    @endforeach
  </p>

  <div class="row">
    <div class="form-group col-md-1">
      <!-- Voltar para a lista de tests //-->
      <a class="btn btn-outline-primary" href="{{ route('procedurs.index') }}">Voltar</a>
    </div>
    <div class="form-group col-md-1">
      <!-- Editar o estado corrente //-->
      <a class="btn btn-warning" href="{{ route('procedurs.edit', $procedur->id) }}">Editar</a>
    </div>
    <div class="form-group col-md-1">
      <!-- Excluir o procedimento corrente //-->
      <form method="post" action="{{ route('procedurs.destroy', $procedur->id) }}" onsubmit="return confirm('Confirma exclusão do Procedimento?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>
    </div>
  </div>


@endsection
