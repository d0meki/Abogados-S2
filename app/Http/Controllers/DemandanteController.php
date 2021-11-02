<?php

namespace App\Http\Controllers;

use App\Models\Demandante;
use Illuminate\Http\Request;

class DemandanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandantes = Demandante::all();
        
        return view('demandantes.index',compact('demandantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'persona_id' => 'required'
        ]);


        $demandante = Demandante::create($request->all());
        return redirect()->route('demandantes.index')->with('info','El demandante se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function show(Demandante $demandante)
    {
        return view('demandantes.show', compact('demandante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandante $demandante)
    {
        return view('demandantes.edit',compact('demandante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demandante $demandante)
    {
        $request->validate([
            'persona_id' => 'required'
        ]);
        $demandante->update($request->all());
        return redirect()->route('demandantes.index')->with('info','El demandante se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandante $demandante)
    {
        $demandante->delete();
        return redirect()->route('demandantes.index')->with('info','El demandante se elimino con exito');
    }
}
