@extends('principal')

@section('titulo', 'Regiões')

@section('conteudo')

  <a class="btn btn-primary" href="{{ route('regioes.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($estados as $e)
    <tr>
      <td>{{ $e->id }}</td>
      <td><a href="{{ route('regioes.show', $e->id) }}">{{ $e->nome }}</a></td>
      <td><a href="{{ route('regioes.show', $e->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection