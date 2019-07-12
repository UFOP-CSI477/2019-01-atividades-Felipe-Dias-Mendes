@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')
    <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/process-filled.png">Editar Procedimento:</h1>

  <form class="form-group" method="post" action="{{ route('procedurs.update', $procedur->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-row">
    	<div class="form-group col-md-3">
    		<p>Nome: <input class="form-control" type="text" name="name" value="{{ $procedur->name }}"></p>
		</div>
		<div class="form-group col-md-3">
    		<p>Preço: <input class="form-control" type="text" name="price" value=" {{ $procedur->price }}"></p>
		</div>
		<div class="form-group col-md-3">
            <p> Usuário
    		  <select class="form-control" name="user_id">
                    @foreach($user as $u)
                        <option value="{{ $u->id }}"

                            @if ( $procedur->user_id == $u->id)
                                selected
                            @endif

                            > {{ $u->name }}</option>
                    @endforeach

                </select>
            </p>
		</div>
    
    </div>

    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
