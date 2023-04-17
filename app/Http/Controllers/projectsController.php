<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class projectsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        $projects = DB::table('projects')->get();
        return view('projects',['user'=>$user,'projects'=>$projects]);

    }


}
