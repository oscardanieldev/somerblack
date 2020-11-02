<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable = [
        'nombre', 'tallas_id', 'descripcion', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'precio',
    ];
}
