<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Competicion;
use App\Models\User;
use Illuminate\Http\Request;

class CompeticionController extends Controller
{
    public function __invoke()
    {
        $user = User::all();
        // $competicion = Competicion::all();
        // $competicion = Competicion::paginate(6);
        $competicion = DB::table('competicion')->paginate(6);

        return view('competiciones', array('user'=>$user, 'competicion'=>$competicion));
    }
}
