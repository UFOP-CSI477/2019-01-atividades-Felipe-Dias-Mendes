@extends('principal')

@section('titulo', 'Cidades')

@section('conteudo')

  <a class="btn btn-primary" href="{{ route('cidades.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Estado</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($cidades as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td><a href="{{ route('cidades.show', $c->id) }}">{{ $c->name }}</a></td>
      <td>{{ $c->estado_id }}</td>
      <td><a href="{{ route('cidades.show', $c->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection
