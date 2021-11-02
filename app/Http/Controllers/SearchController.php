<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Abogado;
use App\Models\Demandado;
use App\Models\Demandante;
use App\Models\Juez;
use App\Models\Procurador;

class SearchController extends Controller
{
    public function juezs(Request $request){
        $term = $request->get('term');

/*         return $term;
        $query = Juez::where('id',$term)->get(); */
        $querys = Juez::join("personas","juezs.persona_id","=","personas.id")
        ->where('personas.nombre','ILIKE', '%' . $term . '%')
        ->get();

        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre
            ]; 
        }
      //  return $querys;
        return $data;
    }
    public function abogados(Request $request){
        $term = $request->get('term');

        $querys = Abogado::join("users","abogados.user_id","=","users.id")
        ->where('users.name','ILIKE', '%' . $term . '%')
        ->get();

        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->name
            ]; 
        }

        return $data;
    }
    public function procuradors(Request $request){
        $term = $request->get('term');

        $querys = Procurador::join("users","procuradors.user_id","=","users.id")
        ->where('users.name','ILIKE', '%' . $term . '%')
        ->get();

        

        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->name
            ]; 
        }

        return $data;
    }
    public function demandados(Request $request){
        $term = $request->get('term');

        $querys = Demandado::join("personas","demandados.persona_id","=","personas.id")
        ->where('personas.nombre','ILIKE', '%' . $term . '%')
        ->get();

        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre
            ]; 
        }
        return $data;
    }
    public function demandantes(Request $request){
        $term = $request->get('term');

        $querys = Demandante::join("personas","demandantes.persona_id","=","personas.id")
        ->where('personas.nombre','ILIKE', '%' . $term . '%')
        ->get();

        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre
            ]; 
        }
        return $data;
    }
}
