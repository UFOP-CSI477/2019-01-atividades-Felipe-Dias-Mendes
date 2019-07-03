@extends('principal')

@section('titulo', 'Exibir Exame')

@section('conteudo')

  <h1 class="mx-auto">Exame: {{ $test->id }}</h1>

  <p>Código: {{ $test->id }}</p>
  <p>Usuário: {{ $test->user_id }}</p>
  <p>Preço: {{ $test->procedur_id }}</p>
  <p>DAta: {{ $test->date }}</p>


  <!-- Voltar para a lista de tests //-->
  <a href="{{ route('tests.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('tests.edit', $procedur->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('tests.destroy', $procedur->id) }}" onsubmit="return confirm('Confirma exclusão do Exame?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>



@endsection
