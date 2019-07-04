@extends('principal')

@section('titulo', 'Procedimentos')


@section('conteudo')

  <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/process-filled.png">Procedimentos</h1>

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
      <td>
        @foreach($user as $u) 
          @if ( $p->user_id == $u->id)
            {{ $u->name }} 
          @endif
        @endforeach</td>
      <td><a class="btn btn-outline-primary" href="{{ route('procedurs.show', $p->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection