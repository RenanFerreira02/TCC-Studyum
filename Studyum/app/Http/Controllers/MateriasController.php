<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\MateriaSerie;

class MateriasController extends Controller
{
    public function subjectIndex()
    {
        $series = Series::all();

        $materias_series = [];

        foreach ($series as $serie) {

            $serie
                ->materias = MateriaSerie::SerieMateria()
                ->where('materia_serie.idSerie', '=', $serie->idSerie)
                ->get();

            // $serie
            //     ->disciplinas = DB::table('serie_materia')
            //                     ->join('materias', 'serie_materia.idMateria', '=', 'materias.idMateria')
            //                     ->where('idSerie', "=", $serie->idSerie)
            //                     ->get();

            array_push($materias_series, $serie);
        }

        return view('subjects', ['materias_series' => $materias_series]);
    }
}
