<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materias')->insert([

            ['idMateria' => null,
            'materia' => 'Matemática'],

            ['idMateria' => null,
            'materia' => 'Português'],

            ['idMateria' => null,
            'materia' => 'História'],

            ['idMateria' => null,
            'materia' => 'Geografia'],

            ['idMateria' => null,
            'materia' => 'Ciências'],

            ['idMateria' => null,
            'materia' => 'Física'],
        ]);
    }
}