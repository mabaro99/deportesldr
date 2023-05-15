<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competicion;

class ApuntarseController extends Controller
{
    public function apuntarse()
    {
        $user = User::all();
        $competicion = Competicion::all();
        return view('apuntarse', array('user'=>$user, 'competicion'=>$competicion));
    }
}
