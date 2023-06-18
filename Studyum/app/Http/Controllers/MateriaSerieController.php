<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriaSerie;
use App\Models\Series;

class MateriaSerieController extends Controller
{
    public function subjectIndex()
    {
        // Retrieve all grades
        $series = Series::all();

        $materias_series = [];

        foreach ($series as $serie) {

            // Retrieve subjects for the current grade
            $serie
                ->materias = MateriaSerie::ShowMateria()
                ->where('materia_serie.idSerie', '=', $serie->idSerie)
                ->get();

            // Push the grade with its related subject to the array
            array_push($materias_series, $serie);
        }

        // Pass the retrieved data to the view and render it
        return view('subjects', ['materias_series' => $materias_series]);
    }
}

