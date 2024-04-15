<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso'; // Especifica el nombre de la tabla


    protected $fillable = ['nom', 'etapa', 'descripcion', 'visibilidad'];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }
}
