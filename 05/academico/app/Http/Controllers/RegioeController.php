<?php

namespace App\Http\Controllers;

use App\regioe;
use Illuminate\Http\Request;

class RegioeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados
        $regioes = regioe::all();
        // View -> apresentar
        return view('regioes.index')
                ->with('regioes', $regioes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regioes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        regioe::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Região inserido com sucesso!');

        //return redirect('/regioes');
        return redirect()->route('regioes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function show(regioe $regioe)
    {
        // $id <-
        // $regioe = Estado::find($id)
        return view('regioes.show')
            ->with('regioe', $regioe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function edit(regioe $regioe)
    {
        return view('regioes.edit')
            ->with('regioe', $regioe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regioe $regioe)
    {
        // Opção 02:
        $regioe->fill($request->all());

        // Para ambas as opções:
        $regioe->save();

        session()->flash('mensagem', 'Região atualizado com sucesso!');

        return redirect()->route('regioes.show', $regioe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function destroy(regioe $regioe)
    {
        // Excluir o região
        $regioe->delete();
        session()->flash('mensagem', 'Região excluído com sucesso!');

        return redirect()->route('regioes.index');
    }
}
