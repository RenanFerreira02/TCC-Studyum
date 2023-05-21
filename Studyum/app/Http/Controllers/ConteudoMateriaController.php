<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoMateria;

class ConteudoMateriaController extends Controller
{
    public function conteudoMateria($id)
    {

        $materiaSerie = ConteudoMateria::where('idMateriaSerie', '=', $id)->get();

        $nomeMateriaSerie = ConteudoMateria::ConteudoMateria()
        ->join('materias', 'materias.idMateria', '=', 'materia_serie.idMateria')
        ->join('series', 'series.idSerie', '=', 'materia_serie.idSerie')
        ->where('conteudo_materia.idMateriaSerie', '=', $id)
        ->first();

        return view('subjects.subjectDisplay', ['materiaSerie' => $materiaSerie, 'nomeMateriaSerie' => $nomeMateriaSerie]);
    }
}
