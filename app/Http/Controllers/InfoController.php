<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pista;
use App\Models\Reserva;
use App\Models\Competicion;

class InfoController extends Controller
{
    public function info() {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();
        $competicion = Competicion::all();
        return view('info', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva, 'competicion'=>$competicion));
    }
}
