<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
        return view('contacts',['user'=>$user]);
    }
}
