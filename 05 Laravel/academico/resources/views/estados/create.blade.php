// Validações ->
        // -- chave estrangeira

        // Excluir o estado
        $estado->delete();
        session()->flash('mensagem', 'Estado excluído com sucesso!');

        return redirect()->route('estados.index');@extends('principal')

@section('titulo', 'Inserir Estado')


@section('conteudo')

  <form method="post" action="{{ route('estados.store') }}">

    @csrf

    <p>Nome: <input type="text" name="nome"></p>
    <p>Sigla: <input type="text" name="sigla"></p>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
