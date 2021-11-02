<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory;
    protected $fillable = [
        'licencia',
         'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
