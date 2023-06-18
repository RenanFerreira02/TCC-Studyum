<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ConteudoMateria extends Model
{
    use HasFactory;

    // Specifies the database table name
    protected $table = 'conteudo_materia'; 

     // Specifies the mass assignable attributes
    protected $fillable = ['id', 'idMateriaSerie', 'tituloConteudo', 'conteudo'];

    // Disables the automatic timestamps management
    public $timestamps = false; 

    // Define a query scope to show the related content
    public function scopeShowConteudo(Builder $query): void
    {
        $query
            ->join('materia_serie', 'conteudo_materia.idMateriaSerie', '=', 'materia_serie.idMateriaSerie') // Joins the 'materia_serie' table
            ->join('materias', 'materias.idMateria', '=', 'materia_serie.idMateria') // Joins the 'materias' table
            ->join('series', 'series.idSerie', '=', 'materia_serie.idSerie'); // Joins the 'series' table
    }
}
