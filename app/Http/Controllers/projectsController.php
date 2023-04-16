<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        return view('projects',['user'=>$user]);
    }


}
