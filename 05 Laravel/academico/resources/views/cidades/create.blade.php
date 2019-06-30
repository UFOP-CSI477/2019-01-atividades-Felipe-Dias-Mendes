// Validações ->
        // -- chave estrangeira

        // Excluir o cidade
        $cidade->delete();
        session()->flash('mensagem', 'Cidade excluído com sucesso!');

        return redirect()->route('estados.index');@extends('principal')

@section('titulo', 'Inserir Cidade')


@section('conteudo')

  <form method="post" action="{{ route('cidades.store') }}">

    @csrf

    <p>Nome: <input type="text" name="name"></p>
    <p>Estado: <input type="text" name="estado_id"></p>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
