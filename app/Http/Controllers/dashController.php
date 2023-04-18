<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('index2',['user'=>$user]);

        

    }
}
