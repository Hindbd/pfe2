<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;


use Illuminate\Http\Request;

class ProfileController2 extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $users=User::all();
        $member = Member::where('id', $user->id)->first();
        if($member){
        $encadrant=$member->encadrant;
        return view('profile',['user'=>$user, 'member' => $member,'encadrant'=>$encadrant]);
        }
        else{
            return view('profile',['user'=>$user,'users'=>$users]);

        }
}
}
