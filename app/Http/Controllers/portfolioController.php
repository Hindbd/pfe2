<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pubs;

class portfolioController extends Controller
{
    //
    // public function index(){
    //     $user=Auth::user();
    //     $event = Events::take(5)->get();
    //     return view('portfolio',['user'=>$user, 'event'=>$event]);
    // }
    public function index2(){
        $user=Auth::user();
        $pub = Pubs::take(5)->get();
        return view('pubsPortfolio',['user'=>$user, 'pub'=>$pub]);
    }
    public function show2($id)
    {
        $user=Auth::user();
        $pub = Pubs::find($id);
        return view('pubsPortfolio', ['user'=>$user,'pub' => $pub]);
    }
    public function show($id)
    {
        $user=Auth::user();
        $event = Events::find($id);
        return view('portfolio', ['user'=>$user, 'event' => $event]);
    }

}
