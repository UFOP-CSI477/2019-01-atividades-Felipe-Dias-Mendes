<?php

namespace App\Http\Controllers;

use App\Procedur;
use Illuminate\Http\Request;

class ProcedurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados
        $procedurs = Procedur::all();
        // View -> apresentar
        return view('procedurs.index')
                ->with('procedurs', $procedurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return view('procedurs.show')
            ->with('procedur', $procedur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedur  $procedur
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedur $procedur)
    {
        return view('procedurs.edit')
            ->with('procedur', $procedur);
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
         // Excluir o procedur
        $procedur->delete();
        session()->flash('mensagem', 'Procedimento excluído com sucesso!');

        return redirect()->route('procedurs.index');
    }
}
