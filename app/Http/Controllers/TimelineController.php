<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class TimelineController extends Controller
{
    public function index(){
        $user = Auth::user();
        $users=User::all();
        $pubs = DB::table('pubs')->get();
        return view('timeline',['user'=>$user, 'pubs'=>$pubs,'users'=>$users]);
    }
}
