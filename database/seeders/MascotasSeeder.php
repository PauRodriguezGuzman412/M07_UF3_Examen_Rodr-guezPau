<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotasSeeder extends Seeder
{
    public function run()
    {
        DB::table('mascotas')->insert([
            [
                'nick'         => 'admin',
                'password'     => 'admin',
                'raça'         => 'Boxer',
                'sexe'         => 'Mascle',
                'edat'         => '12',
                'color'        => 'Marró',
                'nom_huma'     => 'Pepe',
                'telefon_huma' => '123456789',
                'foto'         => 'si',
            ],
            [
                'nick'         => 'Perro',
                'password'     => '1',
                'raça'         => 'Boxer',
                'sexe'         => 'Mascle',
                'edat'         => '12',
                'color'        => 'Marró',
                'nom_huma'     => 'Pepe',
                'telefon_huma' => '123456789',
                'foto'         => 'si',
            ],
            [
                'nick'         => 'Perro',
                'password'     => '1',
                'raça'         => 'Boxer',
                'sexe'         => 'Femella',
                'edat'         => '12',
                'color'        => 'Marró',
                'nom_huma'     => 'Pepe',
                'telefon_huma' => '123456789',
                'foto'         => 'si',
            ],
            [
                'nick'         => 'Perro',
                'password'     => '1',
                'raça'         => 'Boxer',
                'sexe'         => 'Mascle',
                'edat'         => '12',
                'color'        => 'Marró',
                'nom_huma'     => 'Pepe',
                'telefon_huma' => '123456789',
                'foto'         => 'si',
            ],
        ]);

    }
}
