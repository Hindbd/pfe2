<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        $users=User::all();
        return view('contacts',['user'=>$user,'users'=>$users]);
    }
}
