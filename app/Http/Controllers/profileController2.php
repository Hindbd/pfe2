<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProfileController2 extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $users=User::all();
        $member = Member::where('id', $user->id)->first();
        if($member){
        $encadrant=$member->encadrant;
        return view('profile',['user'=>$user, 'member' => $member,'encadrant'=>$encadrant,'users'=>$users]);
        }
        else{
            return view('profile',['user'=>$user,'users'=>$users]);

        }
}
public function edit(Request $request): RedirectResponse
{
    $request->validate([
        'prenom' => ['required', 'string', 'max:255'],
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::user()->id],
    ]);

    // $user=Auth::user()->id; 
    // dd($user);
    // if ($user) {
    //     $user->update([
    //         'prenom' => $request->prenom,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ]);
    //     return redirect('profile');
    // }
    // return redirect()->back()->with('error', 'User not found.');
    $user=Auth::user();
    $user->name=$request->name;
    $user->prenom=$request->prenom;
    $user->email=$request->email;
    $user->save();
        return redirect('profile');
}

}