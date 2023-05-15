<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompeticionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competicion')->insert([
            'nombre' => 'Torneo Furbito',
            'fecha' => '2023-05-24',
            'deporte' => 'Futbol',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '15'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Basket 3x3',
            'fecha' => '2023-05-24',
            'deporte' => 'Baloncesto',
            'n_participantes' => '8',
            'participantes' => '0',
            'id_reserva' => '13'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Baloncesto Cup',
            'fecha' => '2023-05-25',
            'deporte' => 'Baloncesto',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '18'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Padel con Colegas',
            'fecha' => '2023-05-24',
            'deporte' => 'Padel',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '10'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Torneo Padel',
            'fecha' => '2023-05-23',
            'deporte' => 'Padel',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '1'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Padel Lora',
            'fecha' => '2023-05-25',
            'deporte' => 'Padel',
            'n_participantes' => '8',
            'participantes' => '0',
            'id_reserva' => '24'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Lora Tenis',
            'fecha' => '2023-05-25',
            'deporte' => 'Tenis',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '23'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Copa Lora',
            'fecha' => '2023-05-25',
            'deporte' => 'Futbol',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '21'
        ]);
        DB::table('competicion')->insert([
            'nombre' => 'Padelito Day',
            'fecha' => '2023-05-24',
            'deporte' => 'Padel',
            'n_participantes' => '4',
            'participantes' => '0',
            'id_reserva' => '9'
        ]);
    }
}
