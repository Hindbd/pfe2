<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeamsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        $teams = DB::table('equipes')->get();
        return view('teams',['user'=>$user,'teams'=>$teams]);
    }
    
    // public function create(){
    // }
    //     $teams=Auth::user();
    //     return view('teams',['teams'=>$teams]);
    // }
}
