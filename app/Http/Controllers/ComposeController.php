<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ComposeController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view('compose',['user'=>$user]);
    }   
}
