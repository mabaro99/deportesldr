<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatosController extends Controller
{
    public function __invoke()
    {
        $user = User::all();
        return view('datos', array('user'=>$user));
    }
}
