<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\User;


use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index()
    {
        $nbrUser = DB::table('users')->count();
        $nbrPrj = DB::table('projects')->count();
        $nbrPub = DB::table('pubs')->count();
        $member = Member::latest()->take(9)->get();
        $userIds = $member->pluck('id')->toArray();
        $members = User::whereIn('id', $userIds)->get();
        $user = Auth::user();
        return view('adminDashboard',['user'=>$user,'nbrUser'=>$nbrUser,'nbrPub'=>$nbrPub,'nbrPrj'=>$nbrPrj,'members'=>$members]);
    }
    public function index2()
    {
        $user = Auth::user();
        return view('profDashboard',['user'=>$user]);
    }
    public function index3()
    {
        $user = Auth::user();
        $users=User::all();
        $member = Member::where('id', $user->id)->first();
        if($member){
        $encadrant=$member->encadrant;
        return view('doctorantDashboard',['user'=>$user, 'member' => $member,'encadrant'=>$encadrant,'users'=>$users]);
        }
        else{
            return view('doctorantDashboard',['user'=>$user,'users'=>$users]);

        }
    }
    public function index4()
    {
        $user = Auth::user();
        return view('partenaireDashboard',['user'=>$user]);
    }
}
