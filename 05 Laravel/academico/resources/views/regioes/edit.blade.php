@extends('principal')

@section('titulo', 'Editar Região')

@section('conteudo')

  <form method="post" action="{{ route('regioes.update', $regioe->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="name" value="{{ $regioe->name }}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
