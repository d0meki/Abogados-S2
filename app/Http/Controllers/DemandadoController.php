<?php

namespace App\Http\Controllers;

use App\Models\Demandado;
use Illuminate\Http\Request;

class DemandadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandados = Demandado::all();
        
        return view('demandados.index',compact('demandados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandados.create');
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


        $demandado = Demandado::create($request->all());
        return redirect()->route('demandados.index')->with('info','El demandado se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandado  $demandado
     * @return \Illuminate\Http\Response
     */
    public function show(Demandado $demandado)
    {
        return view('demandados.show', compact('demandados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandado  $demandado
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandado $demandado)
    {
        return view('demandados.edit',compact('demandado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demandado  $demandado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demandado $demandado)
    {
        $request->validate([
            'persona_id' => 'required'
        ]);
        $demandado->update($request->all());
        return redirect()->route('demandados.index')->with('info','El demandado se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandado  $demandado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandado $demandado)
    {
        $demandado->delete();
        return redirect()->route('demandados.index')->with('info','El demandado se elimino con exito');
    }
}
