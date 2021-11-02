<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juez extends Model
{
    use HasFactory;
    protected $fillable = [
        'identificacion',
        'persona_id'
    ];
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
