@extends('principal')

@section('titulo', 'Procedimentos')


@section('conteudo')

  <a class="btn btn-primary" href="{{ route('procedurs.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Usuário</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($procedurs as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td><a href="{{ route('procedurs.show', $p->id) }}">{{ $p->name }}</a></td>
      <td>{{ $p->price }}</td>
      <td>{{ $p->user_id }}</td>
      <td><a href="{{ route('procedurs.show', $p->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection