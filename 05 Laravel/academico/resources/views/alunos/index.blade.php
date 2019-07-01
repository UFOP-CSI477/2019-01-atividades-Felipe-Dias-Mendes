@extends('principal')

@section('titulo', 'Alunos')

@section('conteudo')

  <a class="btn btn-primary" href="{{ route('alunos.create') }}">Inserir</a>

  <table class="table table-striped mt-2">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Cidade</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($alunos as $a)
    <tr>
      <td>{{ $a->id }}</td>
      <td><a href="{{ route('alunos.show', $a->id) }}">{{ $a->name }}</a></td>
      <td>{{ $a->email }}</td>
      <td>{{ $a->cidade_id }}</td>
      <td><a href="{{ route('alunos.show', $a->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection
