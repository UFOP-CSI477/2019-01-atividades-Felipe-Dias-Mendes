@extends('principal')

@section('titulo', 'Inserir Região')


@section('conteudo')

  <form method="post" action="{{ route('regioes.store') }}">

    @csrf

    <p>Nome: <input type="text" name="nome"></p>
    <p>Sigla: <input type="text" name="sigla"></p>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
