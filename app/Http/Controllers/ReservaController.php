<?php



namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Pista;
use App\Models\User;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function login() {
        // session_start();
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();

        
            // $usuario = $_REQUEST['usuario'];
            // $password = $_REQUEST['password'];
        

        // if ($usuario == "admin" && $password == "admin") {
        //     return view('administrador', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva, 'usuario'=>$usuario));
        // } else {
        //     return view('principal', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
        // }

        //return $user;

        //return view('login', compact('user'));
        return view('principal', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
    }
    
    public function reserva()
    {
        $user = User::all();
        $pista = Pista::all();
        $reserva = Reserva::all();

        //return $user;

        //return view('login', compact('user'));
        return view('reserva', array('user'=>$user,'pista'=>$pista,'reserva'=>$reserva));
    }
}
