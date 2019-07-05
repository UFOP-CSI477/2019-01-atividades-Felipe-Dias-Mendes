<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use App\Procedur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{   

    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Auth::check() ){

            if(Auth::user()->type == 2){
                // Model -> recuperação dos dados
                $tests = Test::orderBy('date', 'DESC')->get();
                $user = User::orderBy('name', 'ASC')->get();
                $procedur = Procedur::all();
                // View -> apresentar
                return view('tests.indexOP')
                    ->with('tests', $tests)
                    ->with('user', $user)
                    ->with('procedur', $procedur);
             }else if(Auth::user()->type == 3){
                // Model -> recuperação dos dados
                $tests = Test::where('user_id', Auth::user()->id)->orderBy('date', 'DESC')->get();
                $user = User::orderBy('name', 'ASC')->get();
                $procedur = Procedur::all();
                // View -> apresentar
                return view('tests.indexP')
                    ->with('tests', $tests)
                    ->with('user', $user)
                    ->with('procedur', $procedur);
             }else{
                // Model -> recuperação dos dados
                $tests = Test::orderBy('date', 'DESC')->get();
                $user = User::orderBy('name', 'ASC')->get();
                $procedur = Procedur::all();
                // View -> apresentar
                return view('tests.index')
                    ->with('tests', $tests)
                    ->with('user', $user)
                    ->with('procedur', $procedur);
            }
        }else
            return redirect()->route('login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::check() && (Auth::user()->type == 3 || Auth::user()->type == 1)){
            $procedur = Procedur::orderBy('name', 'ASC')->get();
            $user = User::all();
            return view('tests.create')
            ->with('user', $user)
            ->with('procedur', $procedur);
        }else
            return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create($request->all());

        // Mensagem de sucesso:
        // -- Flash
        // mensagem -> campo
        session()->flash('mensagem', 'Exame inserido com sucesso!');

        //return redirect('/tests');
        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {   
        if ( Auth::check() && (Auth::user()->type == 1 || Auth::user()->type == 3)){
            // $id <-
            // $test = Test::find($id)
            $user = User::all();
            $procedur = Procedur::all();
            return view('tests.show')
                ->with('test', $test)
                ->with('user', $user)
                ->with('procedur', $procedur);
        }else
            return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {   
        if ( Auth::check() && (Auth::user()->type == 1 || Auth::user()->type == 3)){
            if(Auth::user()->type == 3){
                $user = User::where('name', Auth::user()->name)->get();
                    $procedur = Procedur::all();
                    return view('tests.edit')
                        ->with('test', $test)
                        ->with('user', $user)
                        ->with('procedur', $procedur);
            }else{
                $user = User::all();
                    $procedur = Procedur::all();
                    return view('tests.edit')
                        ->with('test', $test)
                        ->with('user', $user)
                        ->with('procedur', $procedur);
            }

        }else
            return redirect()->route('login');
            // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        if ( Auth::check() && (Auth::user()->type == 1 || Auth::user()->type == 3)){
            $test->fill($request->all());

            // Para ambas as opções:
            $test->save();

            session()->flash('mensagem', 'Exame atualizado com sucesso!');

            return redirect()->route('tests.show', $test->id);
        }else
            return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        if ( Auth::check() && (Auth::user()->type == 1 || Auth::user()->type == 3)){
            // Excluir o test
            $test->delete();
            session()->flash('mensagem', 'Exame excluído com sucesso!');

            return redirect()->route('tests.index');
        }else
            return redirect()->route('login');
    }
}
