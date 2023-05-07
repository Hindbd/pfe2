<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pubs;
use App\Models\partenaire;

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
        //$pub=Pubs::all();
        $user=Auth::user();
        $event = Events::find($id);
        $images = DB::select('select img from pubs inner join affect_event_pub on pubs.id=affect_event_pub.FK_pub where affect_event_pub.FK_event='.$id);
        return view('portfolio', ['user'=>$user, 'event' => $event,'images' => $images]);
    }

    //Partners portfolio
    public function index3(){
        $user=Auth::user();
        $parts = partenaire::all();
        return view('partnersPortfolio',['user'=>$user, 'parts'=>$parts]);
    }
}
