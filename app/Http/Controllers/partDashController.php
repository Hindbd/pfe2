<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class partDashController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('partenaireDashboard',['user'=>$user]);
    }
}
