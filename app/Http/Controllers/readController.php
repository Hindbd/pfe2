<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class readController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        return view('read-mail',['user'=>$user]);
    }
}
