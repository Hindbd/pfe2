<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $user = Auth::user();
        $admin = DB::table('users')
        ->where('role', '=', 'admin')
        ->get();
        return view('mainHome',['admin'=>$admin,'user'=>$user]);
    }

}
