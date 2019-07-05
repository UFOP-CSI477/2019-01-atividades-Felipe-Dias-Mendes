@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')
    <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/process-filled.png">Operador: Editar Procedimento</h1>

  <form class="form-group" method="post" action="{{ route('procedurs.update', $procedur->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-row">
    	<div class="form-group col-md-3">
    		<p>Nome: {{ $procedur->name }}</p>
		</div>
		<div class="form-group col-md-3">
            <p > Usuário: 
                @foreach($user as $u)
                    @if ( $procedur->user_id == $u->id)
                        {{ $u->name }}
                    @endif
                @endforeach
            </p>
		</div>
        <div class="form-group col-md-3">
            <p>Preço: <input class="form-control" type="text" name="price" value=" {{ $procedur->price }}"></p>
        </div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
