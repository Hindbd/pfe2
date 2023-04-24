<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $user = Auth::user();
         return view('mainHome',['user'=>$user]);
    }
    public function storeContact(Request $request): RedirectResponse{
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],

        ]);

        $msg = Contact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet'=>$request->sujet,
            'message'=>$request->message,
        ]);
        return redirect('mainHome');

    }


}
