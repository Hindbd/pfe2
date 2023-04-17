<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class team2Controller extends Controller
{
    //
    public function index(){
        return view('teams',['teams'=>$teams]);

    }

}
