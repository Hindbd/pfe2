<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipe;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        return view('teams',['user'=>$user]);
    }
}
