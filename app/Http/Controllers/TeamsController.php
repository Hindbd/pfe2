<?php

namespace App\Http\Controllers;

use App\Models\Axes;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipe;
use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ViewErrorBag;

class TeamsController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')
        ->where('role', '=', 'Enseignant')
        ->orWhere('role', '=', 'Doctorant')
        ->get();
        $teams = DB::table('equipes')->get();
        return view('teams',['users'=>$users,'teams'=>$teams]);
    }
    
    public function index2(){
        $axes = DB::table('axes');
        $axes=Axes::all();
        $users = DB::table('users')
        ->where('role', '=', 'Enseignant')
        ->orWhere('role', '=', 'Doctorant')
        ->get();
        return view('add-team',['users'=>$users,'axes'=>$axes]);
    }
    public function indexAxeAdd(){
        $user=Auth::user();
        return view('axe-add',['user'=>$user]);
    }
    public function storeAxe(Request $request): RedirectResponse
{
    $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'contenu' => ['required', 'string', 'max:255'],
    ]);

    $prj = Axes::create([
        'nom' => $request->nom,
        'contenu' => $request->contenu,
   
    ]);
    return redirect('add-axe');
}
public function indexAxeShow(){
    // $axes = DB::table('axes');
    $axes=Axes::all();
    $user=Auth::user();
    return view('axes',['user'=>$user,'axes'=>$axes]);
}

//event 
public function indexEventAdd(){
    return view('event-add');
}
public function storeEvent(Request $request): RedirectResponse
{
    $request->validate([
        'titre' => ['required', 'string', 'max:255'],
        'contenu' => ['required', 'string', 'max:255'],
        'lieu' => ['required', 'string', 'max:255'],
    ]);

    $Event = Events::create([
        'titre' => $request->titre,
        'description' => $request->contenu,
        'Lieu'=> $request->lieu,
        'date_debut'=>$request->date_debut,
        'date_fin'=>$request->date_fin

    ]);
    return redirect('events');
}
public function indexEventShow(){
    $user=Auth::user();
    $events = DB::table('events')->get();
    return view('events',['user'=>$user,'events'=>$events]);
}

//pubs

public function indexPubs(){
    return View('pubs-add');
}
}
