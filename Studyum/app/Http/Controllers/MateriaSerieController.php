<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriaSerie;
use App\Models\Series;

class MateriaSerieController extends Controller
{
    public function subjectIndex()
    {
        $series = Series::all();

        $materias_series = [];

        foreach ($series as $serie) {

            $serie
                ->materias = MateriaSerie::ShowMateria()
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
