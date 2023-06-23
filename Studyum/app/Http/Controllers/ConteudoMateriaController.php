<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoMateria;
use App\Models\MateriaSerie;

class ConteudoMateriaController extends Controller
{
    public function conteudoMateria($id)
    {
        // Retrieve conteudo_materia based on idMateriaSerie
        $materiaSerie = ConteudoMateria::where('idMateriaSerie', '=', $id)->get();

        // Retrieve the nomeMateriaSerie for display
        $nomeMateriaSerie = MateriaSerie::ShowMateriaSerie()
        ->where('idMateriaSerie', '=', $id)
        ->first();

        // Pass the retrieved data to the view and render it
        return view('subjects.subjectDisplay', ['materiaSerie' => $materiaSerie, 'nomeMateriaSerie' => $nomeMateriaSerie]);
    }

    public function conteudo($idMateriaSerie, $idConteudoMateria)
    {
        // Retrieve conteudo_materia based on idMateriaSerie and idConteudoMateria
        $conteudoMateria = ConteudoMateria::where('idMateriaSerie', '=', $idMateriaSerie)
            ->where('id', '=', $idConteudoMateria)
            ->get();

        // Retrieve the nomeMateriaSerie for display
        $nomeMateriaSerie = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $idMateriaSerie)
            ->first();

        // Pass the retrieved data to the view and render it
        return view('subjects.subjectContent', ['conteudoMateria' => $conteudoMateria, 'nomeMateriaSerie' => $nomeMateriaSerie]);
    }

    public function addConteudo($idMateriaSerie)
    {
        // retrieve the id from MateriaSerie model for the input spaces
        $conteudoMateria = MateriaSerie::ShowMateriaSerie()
            ->where('idMateriaSerie', '=', $idMateriaSerie)
            ->first();

        // Retrieve all materia_serie for selection
        $conteudo = MateriaSerie::ShowMateriaSerie()->get();

        // Pass the retrieved data to the view and render it
        return view('subjects.subjectAdd', ['conteudo' => $conteudo, 'conteudoMateria' => $conteudoMateria]);
    }

    public function store(Request $request)
    {
        // Create a new conteudo_materia instance and save it to the database
        $conteudo = ConteudoMateria::create([
            'idMateriaSerie' => $request->materiaSerie,
            'tituloConteudo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        // Redirect to the 'showConteudoMateria' route
        return redirect()->route('showConteudosMateria', ['idMateriaSerie' => $conteudo->idMateriaSerie]);
    }

    public function showEdit($idMateriaSerie, $idconteudoMateria)
    {
        // Retrieve a specific conteudo_materia and related materia_serie for editing
        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('conteudo_materia.idMateriaSerie', '=', $idMateriaSerie)
            ->where('id', '=', $idconteudoMateria)
            ->first();

        // Retrieve all materia_serie for selection
        $materiaSerie = MateriaSerie::ShowMateriaSerie()->get();

        // Pass the retrieved data to the view and render it
        return view('subjects.subjectEdit', ['conteudoMateria' => $conteudoMateria, 'materiaSerie' => $materiaSerie]);
    }

    public function update(Request $request, $idconteudoMateria)
    {
        // Retrieve the specific conteudo_materia for updating
        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('id', '=', $idconteudoMateria)
            ->first();

        // Find and update the conteudo_materia attributes
        $conteudo = ConteudoMateria::find($idconteudoMateria);
        $conteudo->idMateriaSerie = $request->materiaSerie;
        $conteudo->tituloConteudo = $request->titulo;
        $conteudo->conteudo = $request->conteudo;
        $conteudo->save();

        // Redirect to the 'conteudo' route with the updated conteudo_materia's IDs
        return redirect()->route('showConteudo', ['idMateriaSerie' => $conteudoMateria->idMateriaSerie, 'idConteudoMateria' => $conteudoMateria->id]);
    }

    public function destroy($idconteudoMateria)
    {
        // Retrieve the specific conteudo_materia for deletion
        $conteudoMateria = ConteudoMateria::ShowConteudo()
            ->where('id', '=', $idconteudoMateria)
            ->first();

        // Find and delete the conteudo_materia
        $conteudo = ConteudoMateria::find($idconteudoMateria);
        $conteudo->delete();

        // Redirect to the 'conteudoMateria' route with the remaining materia_serie's ID
        return redirect()->route('showConteudosMateria', ['idMateriaSerie' => $conteudoMateria->idMateriaSerie]);
    }
}
