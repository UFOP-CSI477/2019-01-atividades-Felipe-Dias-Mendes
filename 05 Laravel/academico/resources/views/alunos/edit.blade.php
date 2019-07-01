@extends('principal')

@section('titulo', 'Editar Aluno')

@section('conteudo')

  <form method="post" action="{{ route('alunos.update', $aluno->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="name" value="{{ $aluno->name }}"></p>
    <p>E-mail: <input type="text" name="email" value="{{ $aluno->email }}"></p>
    <p>Cidade: <input type="text" name="cidade_id" value="{{ $aluno->cidade_id }}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
