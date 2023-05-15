<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '16:00-17:00',
            'id_usuario' => '21',
            'id_pista'=>'8',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '16:00-17:00',
            'id_usuario' => '10',
            'id_pista'=>'1',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '16:00-17:00',
            'id_usuario' => '28',
            'id_pista'=>'2',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '16:00-17:00',
            'id_usuario' => '25',
            'id_pista'=>'3',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '16:00-17:00',
            'id_usuario' => '19',
            'id_pista'=>'4',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '17:00-18:00',
            'id_usuario' => '23',
            'id_pista'=>'5',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '17:00-18:00',
            'id_usuario' => '12',
            'id_pista'=>'6',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-23',
            'hora' => '17:00-18:00',
            'id_usuario' => '1',
            'id_pista'=>'7',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '17:00-18:00',
            'id_usuario' => '25',
            'id_pista'=>'9',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '17:00-18:00',
            'id_usuario' => '14',
            'id_pista'=>'8',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '17:00-18:00',
            'id_usuario' => '3',
            'id_pista'=>'7',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '18:00-19:00',
            'id_usuario' => '22',
            'id_pista'=>'6',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '18:00-19:00',
            'id_usuario' => '12',
            'id_pista'=>'5',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '18:00-19:00',
            'id_usuario' => '9',
            'id_pista'=>'4',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-24',
            'hora' => '18:00-19:00',
            'id_usuario' => '27',
            'id_pista'=>'3',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '18:00-19:00',
            'id_usuario' => '5',
            'id_pista'=>'1',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '10',
            'id_pista'=>'3',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '25',
            'id_pista'=>'5',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '11',
            'id_pista'=>'7',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '14',
            'id_pista'=>'9',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '13',
            'id_pista'=>'2',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '16:00-17:00',
            'id_usuario' => '2',
            'id_pista'=>'4',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '18:00-19:00',
            'id_usuario' => '16',
            'id_pista'=>'6',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-25',
            'hora' => '19:00-20:00',
            'id_usuario' => '21',
            'id_pista'=>'8',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-26',
            'hora' => '16:00-17:00',
            'id_usuario' => '3',
            'id_pista'=>'1',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-26',
            'hora' => '18:00-19:00',
            'id_usuario' => '10',
            'id_pista'=>'3',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-26',
            'hora' => '18:00-19:00',
            'id_usuario' => '28',
            'id_pista'=>'5',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-26',
            'hora' => '19:00-20:00',
            'id_usuario' => '6',
            'id_pista'=>'7',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-27',
            'hora' => '16:00-17:00',
            'id_usuario' => '6',
            'id_pista'=>'8',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-27',
            'hora' => '18:00-19:00',
            'id_usuario' => '20',
            'id_pista'=>'6',
        ]);
        DB::table('reserva')->insert([
            'fecha'=>'2023-05-27',
            'hora' => '16:00-17:00',
            'id_usuario' => '7',
            'id_pista'=>'2',
        ]);
    }
}
