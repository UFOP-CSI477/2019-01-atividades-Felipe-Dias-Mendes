@extends('principal')

@section('titulo', 'Inserir Região')


@section('conteudo')

  <form method="post" action="{{ route('regioes.store') }}">

    @csrf

    <p>Nome: <input type="text" name="name"></p>

    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection