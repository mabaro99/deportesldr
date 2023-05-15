<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PistaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pista')->insert([
            'nombre' => 'Pista 1',
            'deporte' => 'Futbol'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Pista 2',
            'deporte' => 'Futbol'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Pista 3',
            'deporte' => 'Futbol'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Pabellon',
            'deporte' => 'Futbol'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Pista Baloncesto',
            'deporte' => 'Baloncesto'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Pista Tenis',
            'deporte' => 'Tenis'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Padel 1',
            'deporte' => 'Padel'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Padel 2',
            'deporte' => 'Padel'
        ]);
        DB::table('pista')->insert([
            'nombre' => 'Padel 3',
            'deporte' => 'Padel'
        ]);
    }
}
