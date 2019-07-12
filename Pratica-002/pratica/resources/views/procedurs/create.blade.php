@extends('principal')

@section('titulo', 'Inserir Procedimento')

@section('conteudo')

    <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/process-filled.png">Inserir Procedimento:</h1>

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
            <p> Usuário:
              <select class="form-control" name="user_id">
                    <option value="{{ Auth::user()->id }}"
                    > {{ Auth::user()->name }}</option>
                </select>
            </p>
        </div>
    
    </div>

    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
