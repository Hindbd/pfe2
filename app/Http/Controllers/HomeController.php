<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        //  $user = DB::table('users')->get();
        $user = Auth::user();
        // $posts = DB::table('pubs')->get();
        // return view('welcome', ['posts' => $posts,'user' => $user,]);
        return view('index2', ['user' => $user]);
    }
}
