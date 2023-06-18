<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class MateriaSerie extends Model
{
    use HasFactory;

    // Specifies the database table name
    protected $table = 'materia_serie';


    // Define a query scope to show the related subject
    public function scopeShowMateria(Builder $query): void
    {
        $query
            ->join('materias', 'materia_serie.idMateria', '=', 'materias.idMateria'); // Joins the 'materias' table
    }

    // Define a query scope to show the related subject and grade
    public function scopeShowMateriaSerie(Builder $query): void
    {
        $query
            ->join('materias', 'materia_serie.idMateria', '=', 'materias.idMateria') // Joins the 'materias' table
            ->join('series', 'materia_serie.idSerie', '=', 'series.idSerie'); // Joins the 'series' table
    }
}
