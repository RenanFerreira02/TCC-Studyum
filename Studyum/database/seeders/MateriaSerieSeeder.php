<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materia_serie')->insert([

            [
                'idMateriaSerie' => null,
                'idSerie' => 1,
                'idMateria' => 2
            ],

            [
                'idMateriaSerie' => null,
                'idSerie' => 1,
                'idMateria' => 1
            ],

            [
                'idMateriaSerie' => null,
                'idSerie' => 2,
                'idMateria' => 6
            ],

            [
                'idMateriaSerie' => null,
                'idSerie' => 2,
                'idMateria' => 5
            ],

            [
                'idMateriaSerie' => null,
                'idSerie' => 3,
                'idMateria' => 3
            ],

        ]);
    }
}
