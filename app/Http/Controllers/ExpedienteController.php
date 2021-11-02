<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

use App\Models\Abogado;
use App\Models\Demandado;
use App\Models\Demandante;
use App\Models\Juez;
use App\Models\Procurador;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::id()==1) {
            $expedientes = Expediente::all();
        }else{
            $expedientes = Expediente::join("abogados","expedientes.abogado_id","=","abogados.id")
            ->where('abogados.user_id',Auth::id())
            ->get();
        }

        if (!$expedientes->count()) {
            $expedientes = Expediente::join("procuradors","expedientes.procurador_id","=","procuradors.id")
            ->where('procuradors.user_id',Auth::id())
            ->get();
        }
      //  return $expedientes;
        return view('expedientes.index',compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expedientes.create');
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
            'Caso' => 'Required',
            'juez_id' => 'Required', 
            'abogado_id' => 'Required',
            'procurador_id' => 'Required',
            'demandado_id' => 'Required',
            'demandante_id' => 'Required',
        ]);

        
        $juezs = Juez::join("personas","juezs.persona_id","=","personas.id")
        ->where('personas.nombre','LIKE', $request->juez_id)
        ->select('juezs.id')
        ->get();
        
        $abogados = Abogado::join("users","abogados.user_id","=","users.id")
        ->where('users.name','LIKE', $request->abogado_id)
        ->select('abogados.id')
        ->get();

        $procuradores = Procurador::join("users","procuradors.user_id","=","users.id")
        ->where('users.name','LIKE', $request->procurador_id)
        ->select('procuradors.id')
        ->get();
        $demandados = Demandado::join("personas","demandados.persona_id","=","personas.id")
        ->where('personas.nombre','LIKE',$request->demandado_id)
        ->select('demandados.id')
        ->get();
        $demandantes = Demandante::join("personas","demandantes.persona_id","=","personas.id")
        ->where('personas.nombre','LIKE',$request->demandante_id)
        ->select('demandantes.id')
        ->get();
        foreach ($juezs as $juez) {
            $juez_id = $juez->id;
        }
        foreach ($abogados as $abogado) {
            $abogado_id = $abogado->id;
        }       
        foreach ($procuradores as $procurador) {
            $procurador_id = $procurador->id;
        }
        foreach ($demandados as $demandado) {
            $demandado_id = $demandado->id;
        }
        foreach ($demandantes as $demandante) {
            $demandante_id = $demandante->id;
        }
    $expediente = new Expediente();
    $expediente->Caso = $request->Caso;
    $expediente->juez_id = $juez_id;
    $expediente->abogado_id = $abogado_id;
    $expediente->procurador_id = $procurador_id;
    $expediente->demandado_id = $demandado_id;
    $expediente->demandante_id = $demandante_id;
    $expediente->save();
        return redirect()->route('expedientes.index')->with('info','El expediente se creo con exito!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function show(Expediente $expediente)
    {
        return view('expedientes.show', compact('expediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function edit(Expediente $expediente)
    {
        return view('expedientes.edit',compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $expediente)
    {
        $request->validate([
            'Caso' => 'Required',
            'juez_id' => 'Required', 
            'abogado_id' => 'Required',
            'procurador_id' => 'Required',
            'demandado_id' => 'Required',
            'demandante_id' => 'Required',
        ]);
        $expediente->update($request->all());
        return redirect()->route('expedientes.index')->with('info','El expediente se edito con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expediente  $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return redirect()->route('expedientes.index')->with('info','El expediente se elimino con exito');
    }

}
