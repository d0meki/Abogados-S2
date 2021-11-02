<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Caso',
         'juez_id', 
         'abogado_id',
         'procurador_id',
         'demandado_id',
         'demandante_id',
    ];
    public function juez(){
        return $this->belongsTo(Juez::class);
    }
    public function abogado(){
        return $this->belongsTo(Abogado::class);
    }
    public function procurador(){
        return $this->belongsTo(Procurador::class);
    }
    public function demandado(){
        return $this->belongsTo(Demandado::class);
    }
    public function demandante(){
        return $this->belongsTo(Demandante::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
