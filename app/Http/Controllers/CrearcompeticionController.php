<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pista;
use App\Models\Reserva;

class CrearcompeticionController extends Controller
{
    public function inicio()
    {
        $user = User::all();
        $pista = Pista::all();
        return view('crearcompeticion', array('user'=>$user,'pista'=>$pista));
    }

    public function crear() {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();
        return view('crear', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
    }

    public function crear2() {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();
        return view('crear2', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
    }
}
