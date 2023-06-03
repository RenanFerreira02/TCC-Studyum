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

    public function conteudo($idMateriaSerie, $idConteudoMateria)
    {

        $conteudoMateria = ConteudoMateria::where('idMateriaSerie', '=', $idMateriaSerie)
            ->where('id', '=', $idConteudoMateria)
            ->get();

        // dd($conteudoMateria);
        // exit;

        $nomeMateriaSerie = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $idMateriaSerie)
            ->first();


        return view('subjects.subjectContent', ['conteudoMateria' => $conteudoMateria, 'nomeMateriaSerie' => $nomeMateriaSerie]);
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

    public function showEdit($idMateriaSerie, $idconteudoMateria)
    {
        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $idMateriaSerie)
            ->where('id', '=', $idconteudoMateria)
            ->first();

        $materiaSerie = MateriaSerie::ShowMateriaSerie()->get();

        return view('subjects.subjectEdit', ['conteudoMateria' => $conteudoMateria, 'materiaSerie' => $materiaSerie]);
    }

    public function update(Request $request, $idconteudoMateria)
    {

        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('id', '=', $idconteudoMateria)
            ->first();


        $conteudo = ConteudoMateria::find($idconteudoMateria);

        $conteudo->idMateriaSerie = $request->materiaSerie;
        $conteudo->tituloConteudo = $request->titulo;
        $conteudo->conteudo = $request->conteudo;

        $conteudo->save();

        return redirect()->route('conteudo', ['idMateriaSerie' => $conteudoMateria->idMateriaSerie, 'idConteudoMateria' => $conteudoMateria->id]);
    }

    public function destroy($idconteudoMateria)
    {
        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('id', '=', $idconteudoMateria)
            ->first();

        $conteudo = ConteudoMateria::find($idconteudoMateria);

        $conteudo->delete();

        return redirect()->route('conteudoMateria', ['idMateriaSerie' => $conteudoMateria->idMateriaSerie]);
    }
}
