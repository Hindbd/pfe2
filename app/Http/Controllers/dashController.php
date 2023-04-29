<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('adminDashboard',['user'=>$user]);
    }
    public function index2()
    {
        $user = Auth::user();
        return view('profDashboard',['user'=>$user]);
    }
    public function index3()
    {
        $user = Auth::user();
        return view('doctorantDashboard',['user'=>$user]);
    }
    public function index4()
    {
        $user = Auth::user();
        return view('partenaireDashboard',['user'=>$user]);
    }
}
