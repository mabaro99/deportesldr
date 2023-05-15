<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Pista;
use App\Models\User;
use Illuminate\Http\Request;

class AltaController extends Controller
{
    public function login() {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();

        //return $user;

        //return view('login', compact('user'));
        return view('principal', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
    }
}
