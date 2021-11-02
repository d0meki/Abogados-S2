<?php

namespace App\Http\Controllers;

use App\Models\Procurador;
use Illuminate\Http\Request;

class ProcuradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procuradors = Procurador::all();
        return view('procuradors.index',compact('procuradors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procuradors.create');
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
            'acreditacion' => 'required',
            'user_id' => 'required'
        ]);

       // return $request;

        $procurador = Procurador::create($request->all());
        return redirect()->route('procuradors.index')->with('info','El procurador se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procurador  $procurador
     * @return \Illuminate\Http\Response
     */
    public function show(Procurador $procurador)
    {
        return view('procuradors.show', compact('procurador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procurador  $procurador
     * @return \Illuminate\Http\Response
     */
    public function edit(Procurador $procurador)
    {
        return view('procuradors.edit',compact('procurador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procurador  $procurador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procurador $procurador)
    {
        $request->validate([
            'acreditacion' => 'required',
            'user_id' => 'required'
        ]);
        $procurador->update($request->all());
        return redirect()->route('procuradors.index')->with('info','El procuradors se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procurador  $procurador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procurador $procurador)
    {
        $procurador->delete();
        return redirect()->route('procuradors.index')->with('info','El procuradors se elimino con exito');
    }
}
