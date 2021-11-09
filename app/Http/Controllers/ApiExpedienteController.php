<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use App\Models\ApiExpediente;
use App\Models\Abogado;
use App\Models\Demandado;
use App\Models\Demandante;
use App\Models\Juez;
use App\Models\Procurador;
class ApiExpedienteController extends Controller
{
    public function index()
    {
        $expedientes = Expediente::all('id','Caso');               
        return response($expedientes);
    }
}
