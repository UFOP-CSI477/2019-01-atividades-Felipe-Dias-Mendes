@extends('principal')

@section('titulo', 'Inserir Procedimento')



@section('conteudo')

  <form class="form-group" method="post" action="{{ route('procedurs.store') }}">

    @csrf
    <div class="form-row">
    	<div class="form-group col-md-3">
    		<p>Nome: <input class="form-control" type="text" name="name"></p>
		</div>
		<div class="form-group col-md-3">
    		<p>Preço: <input class="form-control" type="text" name="price"></p>
		</div>
		<div class="form-group col-md-3">
    		<p>Usuário: <input class="form-control" type="text" name="user_id"></p>
		</div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
