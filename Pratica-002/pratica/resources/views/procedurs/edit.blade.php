@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')

  <form class="form-group" method="post" action="{{ route('procedurs.update', $procedur->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-row">
    	<div class="form-group col-md-3">
    		<p>Nome: <input class="form-control" type="text" name="name" value="{{ $procedur->name }}"></p>
		</div>
		<div class="form-group col-md-3">
    		<p>Preço: <input class="form-control" type="text" name="price" value="{{ $procedur->price }}"></p>
		</div>
		<div class="form-group col-md-3">
    		<p>Usuário: <input class="form-control" type="text" name="user_id" value="{{ $procedur->user_id }}"></p>
		</div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
