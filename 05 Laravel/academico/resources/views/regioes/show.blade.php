@extends('principal')

@section('titulo', 'Exibir Região')

@section('conteudo')

  <h1 class="mx-auto">Regioe: {{ $regioe->nome }}</h1>

  <p>Código: {{ $regioe->id }}</p>
  <p>Nome: {{ $regioe->nome }}</p>

  <!-- Voltar para a lista de estados //-->
  <a href="{{ route('regioes.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('regioes.edit', $regioe->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('regioes.destroy', $regioe->id) }}" onsubmit="return confirm('Confirma exclusão da Região?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>










@endsection
