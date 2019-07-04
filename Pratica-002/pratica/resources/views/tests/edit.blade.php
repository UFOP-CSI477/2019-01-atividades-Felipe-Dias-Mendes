@extends('principal')

@section('titulo', 'Editar Exame')

@section('conteudo')

  <form class="form-group" method="post" action="{{ route('tests.update', $test->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-row">
        <div class="form-group col-md-3">
            <p>Usuário: <input class="form-control" type="text" name="user_id" value="{{ $test->user_id }}"></p>
        </div>
        <div class="form-group col-md-3">
            <p>Procedimento: <input class="form-control" type="text" name="procedur_id" value="{{ $test->procedur_id }}"></p>
        </div>
        <div class="form-group col-md-3">
            <p>Data: <input class="form-control" type="date" name="date" value="{{ $test->date }}"></p>
        </div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
