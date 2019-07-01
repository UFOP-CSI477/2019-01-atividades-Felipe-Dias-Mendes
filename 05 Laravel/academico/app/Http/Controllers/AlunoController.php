<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Model -> recuperação dos dados
        $alunos = Aluno::all();
        // View -> apresentar
        return view('alunos.index')
                ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Aluno(a) inserido(a) com sucesso!');

        //return redirect('/aluno');
        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        // $id <-
        // $aluno = Aluno::find($id)
        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit')->with('aluno', $aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
         // Opção 02:
        $aluno->fill($request->all());

        // Para ambas as opções:
        $aluno->save();

        session()->flash('mensagem', 'Aluno(a) atualizado(a) com sucesso!');

        return redirect()->route('alunos.show', $aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        // Excluir o aluno
        $aluno->delete();
        session()->flash('mensagem', 'Aluno(a) excluído(a) com sucesso!');

        return redirect()->route('alunos.index');
    }
}
