<?php

namespace App\Http\Controllers;

use App\Models\pubs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class pubscontroller extends Controller
{
    //
    public function index()
{
    $user = Auth::user();
    $posts = DB::table('pubs')->get();
    return view('welcome', ['user' => $user,'posts' => $posts]);
}
    public function publish()
{
    $user = Auth::user();
    $axes = DB::table('axes')->get();
    $events = DB::table('events')->get();
    return view('pubs-add', ['user' => $user, 'axes' => $axes, 'events'=>$events]);
}
}
