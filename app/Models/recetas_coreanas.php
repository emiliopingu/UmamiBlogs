<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recetas_coreanas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','descripcion', 'ingredientes' , 'valoracion_text' , 'valoracion_int' , 'imagen'
    ];
}
