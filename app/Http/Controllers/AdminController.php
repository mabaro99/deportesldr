<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pista;
use App\Models\User;
use App\Models\Reserva;
use App\Models\Competicion;

class AdminController extends Controller
{
    public function admin() {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();
        $competicion = Competicion::all();
        return view('administrador', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva, 'competicion'=>$competicion));
    }
}
