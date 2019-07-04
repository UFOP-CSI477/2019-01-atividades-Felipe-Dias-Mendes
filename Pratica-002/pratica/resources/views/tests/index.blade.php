@extends('principal')

@section('titulo', 'Exames')


@section('conteudo')

  <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/health-checkup-filled.png">Exames</h1>

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
      <td>
        @foreach($user as $u) 
          @if ( $t->user_id == $u->id)
            {{ $u->name }} 
          @endif
        @endforeach</td>
      <td>
        @foreach($procedur as $p) 
          @if ( $t->procedur_id == $p->id)
            {{ $p->name }} 
          @endif
        @endforeach</td>
      <td>{{ $t->date }}</td>
      <td><a class="btn btn-outline-primary" href="{{ route('tests.show', $t->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection