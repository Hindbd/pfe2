<?php

namespace App\Http\Controllers;

use App\Models\Axes;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeamsController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')
        ->where('role', '=', 'Enseignat')
        ->orWhere('role', '=', 'Doctorant')
        ->get();
        $teams = DB::table('equipes')->get();
        return view('teams',['users'=>$users,'teams'=>$teams]);
    }
    
    public function index2(){
        $axes = DB::table('axes');
        $axes=Axes::all();
        $users = DB::table('users')
        ->where('role', '=', 'Enseignant')
        ->orWhere('role', '=', 'Doctorant')
        ->get();
        return view('add-team',['users'=>$users,'axes'=>$axes]);
    }
}
