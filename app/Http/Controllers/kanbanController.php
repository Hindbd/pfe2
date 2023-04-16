<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class kanbanController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        return view('kanban',['user'=>$user]);
    }
}
