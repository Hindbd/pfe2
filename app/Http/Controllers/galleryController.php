<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view('gallery',['user'=>$user]);
    }
}
