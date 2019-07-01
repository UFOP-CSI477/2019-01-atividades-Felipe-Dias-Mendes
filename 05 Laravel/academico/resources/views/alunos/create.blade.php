// Validações ->
        // -- chave estrangeira

        // Excluir o aluno
        $aluno->delete();
        session()->flash('mensagem', 'Aluno(a) excluído com sucesso!');

        return redirect()->route('estados.index');@extends('principal')

@section('titulo', 'Inserir Aluno(a)')


@section('conteudo')

  <form method="post" action="{{ route('alunos.store') }}">

    @csrf

    <p>Nome: <input type="text" name="name"></p>
    <p>E-mail: <input type="text" name="email"></p>
    <p>Cidade: <input type="text" name="cidade_id"></p>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
