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
  @foreach ($regioes as $r)
    <tr>
      <td>{{ $r->id }}</td>
      <td><a href="{{ route('regioes.show', $r->id) }}">{{ $r->name }}</a></td>
      <td><a href="{{ route('regioes.show', $r->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection