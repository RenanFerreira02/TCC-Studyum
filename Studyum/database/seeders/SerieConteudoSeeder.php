<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieConteudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('serie_conteudo')->insert([

            'idConteudo' => null,
            'idSerie' => 1,
            'idMateria' => 1,
            'conteudo' => 'Teste'
        ]);
    }
}
