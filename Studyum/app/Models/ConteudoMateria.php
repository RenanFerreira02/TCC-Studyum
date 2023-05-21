<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ConteudoMateria extends Model
{
    use HasFactory;

    protected $table = 'conteudo_materia';

    public function scopeConteudoMateria(Builder $query): void
    {
        $query->join('materia_serie', 'conteudo_materia.idMateriaSerie', '=', 'materia_serie.idMateriaSerie');
    }
}
