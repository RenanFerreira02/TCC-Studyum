<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class testeController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->table = 'teste';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teste');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $postData = [
            'name' => $request -> name,
            'date' => $request -> date,
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        $postRef = $this -> database -> getReference($this->table) -> push($postData);

        if($postRef) {
            return redirect('/teste') -> with('alert', 'Sucesso');
        } else {
            return redirect('/teste') -> with('alert', 'Falha');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
