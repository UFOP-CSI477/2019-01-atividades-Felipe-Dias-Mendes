@extends('principal')

@section('titulo', 'Inserir Exame')



@section('conteudo')

    <h1 class="mx-auto"><img src="https://img.icons8.com/ios/50/000000/health-checkup-filled.png">Inserir Exame</h1>

  <form class="form-group" method="post" action="{{ route('tests.store') }}">

    @csrf
    <div class="form-row">
		<div class="form-group col-md-3">
            <p>Usuário:
              <select class="form-control" name="user_id">
                    <option value="{{ Auth::user()->id }}"
                        > {{ Auth::user()->name }}</option>

                </select>
            </p>
        </div>
        <div class="form-group col-md-3">
            <p>Procedimento: 
                <select class="form-control" name="procedur_id">
                    @foreach($procedur as $p)
                        <option value="{{ $p->id }}"
                            > {{ $p->name }}</option>
                    @endforeach

                </select>
            </p>
        </div>
		<div class="form-group col-md-3">
    		<p>Data: <input class="form-control" type="date" name="date"></p>
		</div>
    
    </div>

    <input class="btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection
