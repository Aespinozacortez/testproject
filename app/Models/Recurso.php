<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'visibilidad', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
