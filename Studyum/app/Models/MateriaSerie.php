<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class MateriaSerie extends Model
{
    use HasFactory;

    protected $table = 'materia_serie';

    public function scopeSerieMateria(Builder $query): void
    {
        $query->join('materias', 'materia_serie.idMateria', '=', 'materias.idMateria');
    }

    public function scopeConteudoMateria(Builder $query): void
    {
        $query->join('conteudo_materia', 'conteudo_materia.idSerie', '=', 'materia_serie.idSerie');
    }

}

