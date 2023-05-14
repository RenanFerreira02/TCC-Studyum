<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function subjectIndex()
    {

        $materia_serie = DB::table('materia_serie')
            ->join('materias', 'materia_serie.idmateria', '=', 'materias.idmateria')
            ->join('series', 'materia_serie.idserie', '=', 'series.idserie')
            ->select('*')
            ->get();



        return view('subjects', ['materia_serie' => $materia_serie]);
    }

    public function subjectDisplay()
    {

        $serie_conteudo = DB::table('serie_conteudo')
            ->join('materias', 'serie_conteudo.idmateria', '=', 'materias.idmateria')
            ->join('series', 'serie_conteudo.idserie', '=', 'series.idserie')
            ->select('*')
            ->get();

        return view('subjects.subjectDisplay', ['serie_conteudo' => $serie_conteudo]);
    }
}
