<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurador extends Model
{
    use HasFactory;
    protected $fillable = [
        'acreditacion',
         'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
