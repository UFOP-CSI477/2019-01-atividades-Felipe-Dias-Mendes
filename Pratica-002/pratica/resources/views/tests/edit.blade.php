@extends('principal')

@section('titulo', 'Editar Exame')

@section('conteudo')

    <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/health-checkup-filled.png">Editar Exame</h1>

  <form class="form-group" method="post" action="{{ route('tests.update', $test->id) }}">

    @csrf
    @method('PATCH')

    <div class="form-row">
        <div class="form-group col-md-3">
            <p> Usuário
              <select class="form-control" name="user_id">
                    @foreach($user as $u)
                        <option value="{{ $u->id }}"

                            @if ( $test->user_id == $u->id)
                                selected
                            @endif

                            > {{ $u->name }}</option>
                    @endforeach

                </select>
            </p>
        </div>
        <div class="form-group col-md-3">
            <p>Procedimento: 
                <select class="form-control" name="procedur_id">
                    @foreach($procedur as $p)
                        <option value="{{ $p->id }}"

                            @if ( $test->procedur_id == $p->id)
                                selected
                            @endif

                            > {{ $p->name }}</option>
                    @endforeach

                </select>
            </p>
        </div>
        <div class="form-group col-md-3">
            <p>Data: <input class="form-control" type="date" name="date" value="{{ $test->date }}"></p>
        </div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection
