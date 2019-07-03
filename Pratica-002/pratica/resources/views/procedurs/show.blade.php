@extends('principal')

@section('titulo', 'Exibir Procedimento')

@section('conteudo')

  <h1 class="mx-auto">Procedimento: {{ $procedur->nome }}</h1>

  <p>Código: {{ $procedur->id }}</p>
  <p>Nome: {{ $procedur->name }}</p>
  <p>Preço: {{ $procedur->price }}</p>
  <p>Usuário: {{ $procedur->user_id }}</p>


  <!-- Voltar para a lista de procedurs //-->
  <a href="{{ route('procedurs.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('procedurs.edit', $procedur->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('procedurs.destroy', $procedur->id) }}" onsubmit="return confirm('Confirma exclusão do Procedimento?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>



@endsection
