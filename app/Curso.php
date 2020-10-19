<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'imagen', 'precio', 'fecha_estreno'];
}
