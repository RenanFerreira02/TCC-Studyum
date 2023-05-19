<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoMateria;

class ConteudoMateriaController extends Controller
{
    public function conteudoMateria($id)
    {

        $materiaSerie = ConteudoMateria::where('idMateriaSerie', '=', $id)->get();

        return view('subjects.subjectDisplay', compact('materiaSerie'));
    }
}
