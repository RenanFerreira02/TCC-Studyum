<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Series;
use App\Models\MateriaSerie;
use App\Models\ConteudoMateria;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        // print_r($materias_series); exit;

        return view('subjects', ['materias_series' => $materias_series]);
    }

    public function conteudoMateria($id){

            $materiaSerie = ConteudoMateria::where('idMateriaSerie', '=', $id)->get();

            // dd($materiaSerie);
            return view ('subjects.subjectDisplay', compact('materiaSerie'));
    }


    public function subjectDisplay()
    {

        // $materias_conteudos = ConteudoMateria::all();

        // $conteudos = [];

        // foreach($materias_conteudos as $materia_conteudo){
        //     $materia_conteudo
        //                     ->conteudo= DB::table('materia_serie')
        //                                 ->where('materia_serie.idSerie', '=', $materia_conteudo->idSerie)
        //                                 ->where('materia_serie.idMateria', '=', $materia_conteudo->idMateria)
        //                                 ->get();

        //     array_push($conteudos, $materia_conteudo);
        // }

        // $materias_series = MateriaSerie::all();

        // $conteudos = [];

        // foreach($materias_series as $materia_serie) {
        //     $materia_serie
        //                 ->conteudo= MateriaSerie::SerieMateria()
        //                             ->join('conteudo_materia', 'conteudo_materia.idMateria', '=', 'materia_serie.idMateria')
        //                             ->where('conteudo_materia.idSerie', '=', $materia_serie->idSerie)
        //                             ->where('conteudo_materia.idMateria', '=', $materia_serie->idMateria)
        //                             ->get();

        //     array_push($conteudos, $materia_serie);
        // }



        // print_r($conteudos); exit;

        return view('subjects.subjectDisplay');
    }
    // public function show(SerieMateriaModel $materiaSerie)
    // {
        // return view('subjects.subjectDisplay', ['idMateriaSerie' => $materiaSerie]);
    // }
}
