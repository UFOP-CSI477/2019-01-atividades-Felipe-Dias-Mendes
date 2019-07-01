@extends('principal')

@section('titulo', 'Exibir Cidade')

@section('conteudo')

  <h1 class="mx-auto">Cidade: {{ $cidade->name }}</h1>

  <p>Código: {{ $cidade->id }}</p>
  <p>Nome: {{ $cidade->name }}</p>
  <p>Estado: {{ $cidade->estado_id }}</p>


  <!-- Voltar para a lista de cidades //-->
  <a href="{{ route('cidades.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('cidades.destroy', $cidade->id) }}" onsubmit="return confirm('Confirma exclusão da Cidade?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>










@endsection
