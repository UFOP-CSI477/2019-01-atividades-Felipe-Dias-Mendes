@extends('principal')

@section('titulo', 'Exibir Aluno')

@section('conteudo')

  <h1 class="mx-auto">Aluno: {{ $aluno->name }}</h1>

  <p>Código: {{ $aluno->id }}</p>
  <p>Nome: {{ $aluno->name }}</p>
  <p>E-mail: {{ $aluno->email }}</p>
  <p>Cidade: {{ $aluno->cidade_id }}</p>


  <!-- Voltar para a lista de aluynos //-->
  <a href="{{ route('alunos.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('alunos.destroy', $aluno->id) }}" onsubmit="return confirm('Confirma exclusão do(a) Aluno(a)?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>










@endsection
