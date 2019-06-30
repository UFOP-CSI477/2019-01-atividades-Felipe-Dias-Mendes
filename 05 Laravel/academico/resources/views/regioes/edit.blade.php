@extends('principal')

@section('titulo', 'Editar Região')

@section('conteudo')

  <form method="post" action="{{ route('regioes.update', $regioe->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="nome" value="{{ $regioe->nome }}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
