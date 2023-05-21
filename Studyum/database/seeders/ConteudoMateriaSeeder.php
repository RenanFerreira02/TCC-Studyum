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
                'idMateriaSerie' => 7,
                'tituloConteudo' => 'Progressão Aritmética',
                'conteudo' => 'Conteúdo Teste'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 7,
                'tituloConteudo' => 'Progressão Geométrica',
                'conteudo' => 'Conteúdo Teste'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 7,
                'tituloConteudo' => 'Equação',
                'conteudo' => 'Conteúdo Teste'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' =>7,
                'tituloConteudo' => 'Divisão',
                'conteudo' => 'Conteúdo Teste'
            ],

            [
                'idConteudoMateria' => null,
                'idMateriaSerie' => 3,
                'tituloConteudo' => 'Leis de Newton',
                'conteudo' => 'Conteúdo Teste'
            ],
        ]);
    }
}
