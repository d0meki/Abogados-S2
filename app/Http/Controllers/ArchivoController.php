<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class ArchivoController extends Controller
{

    public function index()
    {
        $archivos = Archivo::all();       
        return view('archivos.index',compact('archivos'));
    }
    public function mostrar(Expediente $expediente){
        $archivos = Archivo::where('expediente_id',$expediente->id)->get();
        return view('archivos.index',compact('archivos'));
    }

    public function create()
    {
        
        return view('archivos.create');
    }

    public function store(Request $request)
    {
        $max_size = (int)ini_get('upload_max_filesize')*1024;
        $files = $request->file('files');
 
        foreach ($files as $file) {          
            if (Storage::putFileAs('/public/'.$request->expediente_id.'/',$file,$file->getClientOriginalName())) {
                Archivo::create([
                    'descripcion' => $request->descripcion,
                    'archivo' => $file->getClientOriginalName(),
                    'expediente_id' =>$request->expediente_id
                ]);
            }            
        }
        return redirect()->route('expedientes.index')->with('info','El archivo se subio con exito!');
       
    }

    public function show(Archivo $archivo)
    {
        return $archivo;
        //return view('archivos.create');
    }

    public function edit(Archivo $archivo)
    {
        //
    }

    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        
    }
    public function crear(Expediente $expediente){
        return view('archivos.create',compact('expediente'));
    }
}
