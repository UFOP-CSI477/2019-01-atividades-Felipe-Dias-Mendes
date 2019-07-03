@extends('principal')

@section('titulo', 'Exames')


@section('conteudo')

  <a class="btn btn-primary" href="{{ route('tests.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Usuário</th>
      <th>Procedimento</th>
      <th>Data</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($tests as $t)
    <tr>
      <td>{{ $t->id }}</td>
      <td>{{ $t->user_id }}</td>
      <td>{{ $t->procedur_id }}</td>
      <td>{{ $t->date }}</td>
      <td><a href="{{ route('tests.show', $t->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection