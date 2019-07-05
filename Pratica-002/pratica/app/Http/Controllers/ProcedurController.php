<?php

namespace App\Http\Controllers;

use App\Procedur;
use App\User;
use Illuminate\Http\Request;

class ProcedurController extends Controller
{   

    public function geral()
    {
        // Model -> recuperação dos dados ordenados pelo nome
        $procedurs = Procedur::orderBy('name', 'ASC')->get();
        $user = User::all();
        // View -> apresentar
        return view('procedurs.geral')
                ->with('procedurs', $procedurs)
                ->with('user', $user);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados ordenados pelo nome
        $procedurs = Procedur::orderBy('name', 'ASC')->get();
        $user = User::all();
        // View -> apresentar
        return view('procedurs.index')
                ->with('procedurs', $procedurs)
                ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = User::all();
        return view('procedurs.create')
                ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Verifica se o usuário está logado
        $this->middleware('auth');
        Procedur::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Procedimento inserido com sucesso!');

        //return redirect('/procedurs');
        return redirect()->route('procedurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedur  $procedur
     * @return \Illuminate\Http\Response
     */
    public function show(Procedur $procedur)
    {
        // $id <-
        // $procedur = Procedur::find($id)
        $user = User::all();
        return view('procedurs.show')
            ->with('procedur', $procedur)
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedur  $procedur
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedur $procedur)
    {
        //Verifica se o usuário está logado
        $this->middleware('auth');
        $user = User::all();
        return view('procedurs.edit')
            ->with('procedur', $procedur)
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedur  $procedur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedur $procedur)
    {
        //Verifica se o usuário está logado
        $this->middleware('auth');
        $procedur->fill($request->all());

        // Para ambas as opções:
        $procedur->save();

        session()->flash('mensagem', 'Procedimento atualizado com sucesso!');

        return redirect()->route('procedurs.show', $procedur->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedur  $procedur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedur $procedur)
    {
        //Verifica se o usuário está logado
        $this->middleware('auth');
         // Excluir o procedur
        $procedur->delete();
        session()->flash('mensagem', 'Procedimento excluído com sucesso!');

        return redirect()->route('procedurs.index');
    }
}
