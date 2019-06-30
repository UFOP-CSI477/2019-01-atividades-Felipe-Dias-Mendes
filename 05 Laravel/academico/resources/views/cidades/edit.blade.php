@extends('principal')

@section('titulo', 'Editar Cidade')

@section('conteudo')

  <form method="post" action="{{ route('cidades.update', $cidade->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="name" value="{{ $cidade->name }}"></p>
    <p>Sigla: <input type="text" name="estado_id" value="{{ $cidade->estado_id }}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
