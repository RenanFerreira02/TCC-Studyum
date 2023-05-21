<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoMateria;
use App\Models\MateriaSerie;

class ConteudoMateriaController extends Controller
{
    public function conteudoMateria($id)
    {

        $materiaSerie = ConteudoMateria::where('idMateriaSerie', '=', $id)->get();

        $nomeMateriaSerie = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $id)
            ->first();

        return view('subjects.subjectDisplay', ['materiaSerie' => $materiaSerie, 'nomeMateriaSerie' => $nomeMateriaSerie]);
    }

    public function addConteudo()
    {
        $conteudo = MateriaSerie::ShowMateriaSerie()->get();

        return view('subjects.subjectAdd', ['conteudo' => $conteudo]);
    }

    public function store(Request $request)
    {

        $conteudo = ConteudoMateria::create([
            'idMateriaSerie' => $request->materiaSerie,
            'tituloConteudo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        $conteudo->save();

        return redirect('/materias');
    }

    public function conteudo($id, $idConteudo)
    {

        $conteudoMateria = ConteudoMateria::where('idMateriaSerie', '=', $id)
            ->where('idConteudoMateria', '=', $idConteudo)
            ->get();

        // dd($conteudoMateria);
        // exit;

        $nomeMateriaSerie = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $id)
            ->first();


        return view('subjects.subjectContent', ['conteudoMateria' => $conteudoMateria, 'nomeMateriaSerie' => $nomeMateriaSerie]);
    }
}
