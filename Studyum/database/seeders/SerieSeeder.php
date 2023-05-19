<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('series')->insert([

            [
                'idSerie' => null,
                'serie' => '1ª Série'
            ],

            [
                'idSerie' => null,
                'serie' => '2ª Série'
            ],

            [
                'idSerie' => null,
                'serie' => '3ª Série
            '
            ],
        ]);
    }
}
