<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\member;
use App\Models\User;
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
    // public function index2(){
    //     $user=Auth::user();
    //     $pub = Pubs::take(5)->get();
    //     return view('pubsPortfolio',['user'=>$user, 'pub'=>$pub]);
    // }
    public function show2($id)
    {
        $user=Auth::user();
        $pub = Pubs::find($id);
        $image_path = 'images/' . $pub->img;
        return view('pubsPortfolio', ['user'=>$user,'pub' => $pub, 'image_path'=>$image_path]);
    }
    public function showEvent($id)
    {   
        //$pub=Pubs::all();
        // $pub = pubs::find($id);
        // $pubs = DB::table('pubs')
        //                 ->where('id',$id)
        //                 ->get();
        // $pub = DB::table('affect_event_pub')->where('FK_pub', $id)->first();
        // $user=Auth::user();
        // // $event = Events::find($id);
        // $images = DB::select('select img from pubs inner join affect_event_pub on pubs.id=affect_event_pub.FK_pub where affect_event_pub.FK_event='.$id); // HNA $id DYAL evnt MASHI pub
        // $event = DB::table('affect_event_pub')->where('FK_event', $pub->id)->first();
        // // $event=$event->id;
        // if ($event) {
        //     $event_id = $event->id;
        //     $events=Events::find($event_id);

        //     // rest of your code
        // } else {
        //     // handle the case when the event with the given id is not found
        // }
        // return view('portfolio', ['user'=>$user, 'events' => $events,'images' => $images, 'pub' => $pub]);
        $event=Events::find($id);
        $pubs=DB::table('affect_event_pub')
                       ->where('FK_event',$id)
                      ->get();
        return view('portfolio',['event'=>$event,'pubs'=>$pubs]);
    }

    //Partners portfolio
    public function showPart(){
        $user=Auth::user();
        $parts = partenaire::all();
        // $userIds = $part->pluck('id')->toArray();
        // $parts = User::whereIn('id', $userIds)->get();
        return view('partnersPortfolio',['user'=>$user, 'parts'=>$parts,]);
    }
    

    //Members portfolio
    public function showMbr(){
        $user=Auth::user();
        $member = Member::all();
        $userIds = $member->pluck('id')->toArray();
        $members = User::whereIn('id', $userIds)->get();
        return view('membersPortfolio', ['user'=>$user, 'members'=>$members]);
    }
}
