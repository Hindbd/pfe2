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
use App\Models\Member;
use App\Models\Project;
use App\Models\pubs;

class TeamsController extends Controller
{
    //
    // public function index(){
    //     $users = DB::table('users')
    //     ->where('role', '=', 'Enseignant')
    //     ->orWhere('role', '=', 'Doctorant')
    //     ->get();
    //     $teams = DB::table('equipes')->get();
    //     return view('teams',['users'=>$users,'teams'=>$teams]);
    // }
    
    //equipes
    public function indexEquipe(){
        $axes = DB::table('axes');
        $axes=Axes::all();
        $members = Member::all();
        $userIds = $members->pluck('id')->toArray();
        $user=Auth::user();
        $members = User::whereIn('id', $userIds)->get();
        return view('add-team',['axes'=>$axes,'members'=>$members]);
    }
    public function storeequipe(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'chef' => ['required', 'string', 'max:255'],
            
        ]);
    
        $team = Equipe::create([
            'nom' => $request->nom,
            'chef_equipe' => $request->chef,
       
        ]);
        $selectedMembers = $request->input('members');
        $team->equipe_member()->attach($selectedMembers);
        
        return redirect('teams');
    }
    public function indexTeams(){
        $teams=Equipe::all();
        $user=Auth::user();
        $users=Equipe::all();
        $teamMembers = DB::table('affect_equipe_member')->get();
        $members = Member::all();
        $userIds = $members->pluck('id')->toArray();
        $members = User::whereIn('id', $userIds)->get();
        return view('teams',['user'=>$user,'teams'=>$teams,'users'=>$users,'teamMembers'=>$teamMembers
    ,'members'=>$members]);
    }

    //axes
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

//events
public function indexEventAdd(){
    $members = Member::all();
    $userIds = $members->pluck('id')->toArray();
    $members = User::whereIn('id', $userIds)->get();
    $axes=Axes::all();
    $projects=Project::all();
    $user=Auth::user();
    return view('event-add',['user'=>$user,'axes'=>$axes,'members'=>$members, 'projects'=>$projects ]);
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
    //axes
    $selectedAxes = $request->input('axes_recherche');
    $Event->event_axe()->attach($selectedAxes);
    //members 
    $selectedMembers = $request->input('members');
    $Event->event_member()->attach($selectedMembers);
    //projects
    $selectedProjects = $request->input('projects'); 
    $Event->event_prj()->attach($selectedProjects);
        return redirect('events');


}
public function indexEventShow(){
    $user=Auth::user();
    $events = DB::table('events')->get();
    $projects = DB::table('affect_event_prj')->get();
    $axes=DB::table('affect_event_axe')->get();
    $members=DB::table('affect_event_member')->get();
    return view('events',['user'=>$user,'projects'=>$projects,'axes'=>$axes,'members'=>$members,'events'=>$events]);
}

//pubs
public function indexPubs(){
    $user = Auth::user();
    $axes = DB::table('axes')->get();
    $events = DB::table('events')->get();
    return view('pubs-add', ['user' => $user, 'axes' => $axes, 'events'=>$events]);}



public function publish(Request $request): RedirectResponse
{
    $request->validate([
        'titre' => ['required', 'string', 'max:255'],
        'contenu' => ['required', 'string', 'max:255']
        ]);

// Get the uploaded image file from the request
$imageFile = $request->file('img');

if ($imageFile) {
    // Generate a unique filename for the image
    $filename = uniqid().'.'.$imageFile->getClientOriginalExtension();

    // Move the uploaded image to the desired location (e.g., 'public/images' directory)
    $imageFile->move(public_path('images'), $filename);
} else {
    // No image file was uploaded, so set the filename to null or a default value
    $filename = null; // or provide a default image filename
}

// Create the pub with the uploaded image filename
$pub = pubs::create([
    'titre' => $request->titre,
    'contenu' => $request->contenu,
    'img' => $filename,
    'editeur'=>Auth::user()->id
]);

    //axes
    $selectedAxes = $request->input('axes');
    $pub->pub_axe()->attach($selectedAxes);
    // //members 
    // $selectedMembers = $request->input('members');
    // $pub->pub_member()->attach($selectedMembers);
    //events
    $selectedEvents = $request->input('events');
    $pub->pub_event()->attach($selectedEvents);

        return redirect('timeline');


}
}
