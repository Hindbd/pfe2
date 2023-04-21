<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class docDashController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('doctorantDashboard',['user'=>$user]);
    }
}
