<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;
class ApiArchivoController extends Controller
{
    public function mostrar(Expediente $expediente)
    {
        $archivos = Archivo::where('expediente_id',$expediente->id)->get();            
        return response($archivos);
    }

    public function upload(Request $request)
    {
        $max_size = (int)ini_get('upload_max_filesize')*1024;
        $file = $request->file('files');
        $archivo = $file->getClientOriginalName();
        $id_expediente = $request->expediente_id;
        $descripcion = $request->descripcion;

        if (Storage::putFileAs('/public/'.$id_expediente.'/',$file,$archivo)) {
            Archivo::create([
                'descripcion' => $descripcion,
                'archivo' => $archivo,
                'expediente_id' =>$id_expediente,
            ]);
            return "subido con exito ";
        }else{
            return "error";
        }     
    }

    public function download($id,$name){

      return response()->download(public_path(Storage::url($id.'/'.$name)));
    }
}
