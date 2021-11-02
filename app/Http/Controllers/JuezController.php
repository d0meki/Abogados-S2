<?php

namespace App\Http\Controllers;

use App\Models\Juez;
use Illuminate\Http\Request;

class JuezController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juezs = Juez::all();
        
        return view('juezs.index',compact('juezs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juezs.create');
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
            'persona_id' => 'required',
            'identificacion' => 'required'
        ]);


        $juez = Juez::create($request->all());
        return redirect()->route('juezs.index')->with('info','El juez se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juez  $juez
     * @return \Illuminate\Http\Response
     */
    public function show(Juez $juez)
    {
        return view('juezs.show', compact('juez'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juez  $juez
     * @return \Illuminate\Http\Response
     */
    public function edit(Juez $juez)
    {
        return view('juezs.edit',compact('juez'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juez  $juez
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juez $juez)
    {
        $request->validate([
            'persona_id' => 'required',
            'identificacion' => 'required'
        ]);
        $juez->update($request->all());
        return redirect()->route('juezs.index')->with('info','El juez se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juez  $juez
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juez $juez)
    {
        $juez->delete();
        return redirect()->route('juezs.index')->with('info','El juez se elimino con exito');
    }
}
