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

            ['idMateria' => 1,
            'idSerie' => 1],

            ['idMateria' => 2,
            'idSerie' =>2],

        ]);
    }
}
