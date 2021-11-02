<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abogados = Abogado::all();
        return view('abogados.index',compact('abogados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abogados.create');
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
            'licencia' => 'required',
            'user_id' => 'required',
        ]);

       // return $request;

        $abogado = Abogado::create($request->all());
        return redirect()->route('abogados.index')->with('info','El abogado se creo con exito!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function show(Abogado $abogado)
    {
        return view('abogados.show', compact('abogado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Abogado $abogado)
    {
        return view('abogados.edit',compact('abogado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abogado $abogado)
    {
        $request->validate([
            'licencia' => 'required',
            'user_id' => 'required',
        ]);
        $abogado->update($request->all());
        return redirect()->route('abogados.index')->with('info','El abogado se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abogado $abogado)
    {
        $abogado->delete();
        return redirect()->route('abogados.index')->with('info','El abagado se elimino con exito');
    }
}
