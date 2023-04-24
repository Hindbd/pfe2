<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    //
    public function index(){
        // $msgs = DB::table('contacts');
        $msgs=Contact::all();
        $user=Auth::user();
        return view('mailbox',['user'=>$user,'msgs'=>$msgs]);
    } 
}
