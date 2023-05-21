<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConteudoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conteudo_materia')->insert([

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 2,
                'tituloConteudo' => 'Progressão Aritmética'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 2,
                'tituloConteudo' => 'Progressão Geométrica'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 2,
                'tituloConteudo' => 'Equação'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' =>2,
                'tituloConteudo' => 'Divisão'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 6,
                'tituloConteudo' => 'Leis de Newton'
            ],
        ]);
    }
}
