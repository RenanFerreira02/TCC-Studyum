<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ConteudoMateria extends Model
{
    use HasFactory;

    protected $table = 'conteudo_materia';

    protected $fillable = ['idMateriaSerie', 'tituloConteudo', 'conteudo'];

    public $timestamps = false;

    public function scopeShowConteudo(Builder $query): void
    {
        $query
            ->join('materia_serie', 'conteudo_materia.idMateriaSerie', '=', 'materia_serie.idMateriaSerie')
            ->join('materias', 'materias.idMateria', '=', 'materia_serie.idMateria')
            ->join('series', 'series.idSerie', '=', 'materia_serie.idSerie');
    }
}
