<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pubs;
use Illuminate\Support\Facades\DB;

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
        // $pub = pubs::find($id);
        $pubs = DB::table('pubs')
                        ->where('id',$id)
                        ->get();
        $pub = DB::table('affect_event_pub')->where('FK_pub', $id)->first();
        $user=Auth::user();
        // $event = Events::find($id);
        $event = DB::table('affect_event_pub')->where('FK_event', $pub->id)->first();
        // $event=$event->id;
        if ($event) {
            $event_id = $event->id;
            $events=Events::find($event_id);

            // rest of your code
        } else {
            // handle the case when the event with the given id is not found
        }
        return view('portfolio', ['user'=>$user, 'events' => $events,'pub' => $pub]);
    }

}
