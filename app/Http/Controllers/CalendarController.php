<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('calendar',['user'=>$user]);
    }
}
