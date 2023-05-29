<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Juego extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Nombre',
        'Portada',
        'Descripcion',
        'Fecha_lanzamiento',       
        'Categoria',
        'Switch',
        'Ps5',
        'Xbox',
        'Pc',
    ];
}
