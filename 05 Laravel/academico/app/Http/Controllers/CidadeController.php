<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados
        $cidades = Cidade::all();
        // View -> apresentar
        return view('cidades.index')
                ->with('cidades', $cidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cidade::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Cidade inserido com sucesso!');

        //return redirect('/cidade');
        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        // $id <-
        // $cidade = Cadade::find($id)
        return view('cidades.show')
            ->with('cidade', $cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        return view('cidades.edit')
            ->with('cidade', $cidade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        // Opção 02:
        $cidade->fill($request->all());

        // Para ambas as opções:
        $cidade->save();

        session()->flash('mensagem', 'Cidade atualizada com sucesso!');

        return redirect()->route('cidades.show', $cidade->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        // Validações ->
        // -- chave estrangeira

        // Excluir o estado
        $cidade->delete();
        session()->flash('mensagem', 'Cidade excluída com sucesso!');

        return redirect()->route('cidades.index');
    }
}
