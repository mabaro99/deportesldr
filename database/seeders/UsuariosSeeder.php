<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'username'=>'manu',
            'nombre' => 'Manuel',
            'apellido' => 'Baeza Romero',
            'email'=>'manuelbaezaromero@gmail.com',
            'password'=>'manu'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'javi',
            'nombre' => 'Javier',
            'apellido' => 'Baeza Romero',
            'email'=>'javierbr@gmail.com',
            'password'=>'javier1'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'jordana',
            'nombre' => 'Jordana',
            'apellido' => 'Cervera Rocamora',
            'email'=>'jordanacr@gmail.com',
            'password'=>'usuario2'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'mariadelcarmen',
            'nombre' => 'Maria del Carmen',
            'apellido' => 'Olivera',
            'email'=>'mdco@gmail.com',
            'password'=>'mariadelcarmen'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'mar',
            'nombre' => 'Mar',
            'apellido' => 'Marquez Fuente',
            'email'=>'mmf@gmail.com',
            'password'=>'mar'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'miguel',
            'nombre' => 'Miguel',
            'apellido' => 'Velasco Romero',
            'email'=>'mvr@gmail.com',
            'password'=>'miguel'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'xavier',
            'nombre' => 'Xavier',
            'apellido' => 'Tamarit Agullo',
            'email'=>'xta@gmail.com',
            'password'=>'xavier'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'bonifacio',
            'nombre' => 'Bonifacio',
            'apellido' => 'Mínguez Castrillo',
            'email'=>'bmc@gmail.com',
            'password'=>'bonifacio'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'alvaro',
            'nombre' => 'Alvaro',
            'apellido' => 'Gonzalez Gamero',
            'email'=>'agg@gmail.com',
            'password'=>'alvaro'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'laura',
            'nombre' => 'Laura',
            'apellido' => 'Perez Macias',
            'email'=>'lpm@gmail.com',
            'password'=>'laura'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'manolo',
            'nombre' => 'Manuel',
            'apellido' => 'Molina Fuentes',
            'email'=>'momofu@gmail.com',
            'password'=>'manolo'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'ana',
            'nombre' => 'Ana',
            'apellido' => 'Felipe',
            'email'=>'anafelipe@gmail.com',
            'password'=>'ana'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'ainhoa',
            'nombre' => 'Ainhoa',
            'apellido' => 'Ramos Garcia',
            'email'=>'arg@gmail.com',
            'password'=>'ainhoa'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'antonio',
            'nombre' => 'Antonio',
            'apellido' => 'Nieto Romera',
            'email'=>'anr@gmail.com',
            'password'=>'antonio'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'rosi',
            'nombre' => 'Rosa Maria',
            'apellido' => 'Segovia Ollero',
            'email'=>'rmso@gmail.com',
            'password'=>'rosi'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'marcos',
            'nombre' => 'Marcos',
            'apellido' => 'Galan Lara',
            'email'=>'mgl@gmail.com',
            'password'=>'marcos'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'fernando',
            'nombre' => 'Fernando',
            'apellido' => 'Alonso Diaz',
            'email'=>'nano33@gmail.com',
            'password'=>'fernando'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'carlosainz',
            'nombre' => 'Carlos',
            'apellido' => 'Sainz Vazquez de Castro',
            'email'=>'csvc@gmail.com',
            'password'=>'carlos'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'hugo',
            'nombre' => 'Hugo',
            'apellido' => 'Maestre Segovia',
            'email'=>'hms@gmail.com',
            'password'=>'hugo'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'carlos',
            'nombre' => 'Carlos',
            'apellido' => 'Maestre Segovia',
            'email'=>'cms@gmail.com',
            'password'=>'carlos'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'elias',
            'nombre' => 'Elias',
            'apellido' => 'Fernandez Baeza',
            'email'=>'efb@gmail.com',
            'password'=>'elias'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'joaquin',
            'nombre' => 'Joaquin',
            'apellido' => 'Sanchez Rodriguez',
            'email'=>'joaking17@gmail.com',
            'password'=>'joaquin'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'daniel',
            'nombre' => 'Daniel',
            'apellido' => 'Sanchez Gamero',
            'email'=>'dsg@gmail.com',
            'password'=>'daniel'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'andres',
            'nombre' => 'Andres',
            'apellido' => 'Caro de la Barrera Fernandez',
            'email'=>'andrajos@gmail.com',
            'password'=>'andres'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'lola',
            'nombre' => 'Dolores',
            'apellido' => 'Romero Garcia',
            'email'=>'lolita@gmail.com',
            'password'=>'lola'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'antonioenamorado',
            'nombre' => 'Antonio',
            'apellido' => 'Enamorado Aguilar',
            'email'=>'aea@gmail.com',
            'password'=>'antonio'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'juanmi',
            'nombre' => 'Juan Miguel',
            'apellido' => 'Jimenez Lopez',
            'email'=>'orei@gmail.com',
            'password'=>'juanmi'
        ]);
        DB::table('usuarios')->insert([
            'username'=>'nabil',
            'nombre' => 'Nabil',
            'apellido' => 'Fekir',
            'email'=>'nabilfekir@gmail.com',
            'password'=>'nabil'
        ]);
    }
}
