<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class MateriaSerie extends Model
{
    use HasFactory;

    protected $table = 'materia_serie';

    public function scopeShowMateria(Builder $query): void
    {
        $query
            ->join('materias', 'materia_serie.idMateria', '=', 'materias.idMateria');
    }

    public function scopeShowMateriaSerie(Builder $query): void
    {
        $query
            ->join('materias', 'materia_serie.idMateria', '=', 'materias.idMateria')
            ->join('series', 'materia_serie.idSerie', '=', 'series.idSerie');
    }
}
