<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Axes;
use App\Models\Events;
use App\Models\Member;
use Illuminate\Console\Scheduling\Event;
use App\Models\Contact;

class ProjectController extends Controller
{
    public function index(){
        $members = Member::all();
        $userIds = $members->pluck('id')->toArray();
        $members = User::whereIn('id', $userIds)->get();
        $axes=Axes::all();
        $user=Auth::user();
        // $users = DB::table('users')
        // ->where('role', '=', 'Enseignant')
        // ->orWhere('role', '=', 'Doctorant')
        // ->get();
        return view('project-add',['user'=>$user,'axes'=>$axes,'members'=>$members]);
}
public function indexShow(){
    $user=Auth::user();
    $projects = DB::table('projects')->get();
    $axes=DB::table('affect_axe_prj')->get();
    $members=DB::table('affect_prj_member')->get();
    return view('projects',['user'=>$user,'projects'=>$projects,'axes'=>$axes,'members'=>$members]);

}
public function store(Request $request): RedirectResponse
{
    $request->validate([
        'titre' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string', 'max:255'],
        'date_debut'=>['required', 'date'],
        'date_fin'=>['required', 'date'],
    ]);

    $prj = Project::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'date_debut'=>$request->date_debut,
        'date_fin'=>$request->date_fin
    ]);
//axes
    $selectedAxes = $request->input('axes_recherche');
    $prj->axe_prj()->attach($selectedAxes);
//members 
    $selectedMembers = $request->input('members_prj');
    $prj->member_prj()->attach($selectedMembers);

    return redirect('#');
}
public function index2(){
    $user=Auth::user();
    return view('project-detail',['user'=>$user]);
    
}
public function index3(){
    $user=Auth::user();
    
    return view('project-edit',['user'=>$user]);
    
}
public function propose()
{
    $user=Auth::user();
    return view('propose', ['user'=>$user]);
}
public function proposeprj(Request $request): RedirectResponse{
    $request->validate([
        'titre' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string', 'max:2555'],

    ]);
    $user=Auth::user();
    $msg = Contact::create([
        'nom' => $user->name,
        'email' =>$user->email,
        'sujet'=>$request->titre,
        'message'=>$request->description,
    ]);
    return redirect('#');

}

//prj apply prj
public function apply()
{
    $user=Auth::user();
    $projects = DB::table('projects')->get();
    return view('apply', ['user'=>$user,'projects'=>$projects]);
}
public function applyprj(Request $request): RedirectResponse
{

    $user=Auth::user();
    $selectedProject = $request->input('projects');
    foreach($selectedProject as $id){
    $prj = Project::find($id);
    $prj->member_prj()->attach($user->id, ['FK_prj' => $id]);
    }
    
    return redirect('#');
}
public function signup()
{
    $user=Auth::user();
    $events = DB::table('events')->get();
    return view('event-signup', ['user'=>$user,'events'=>$events]);
}
public function signupevent(Request $request): RedirectResponse
{
    $user=Auth::user();
    $selectedEvent = $request->input('events');
    foreach($selectedEvent as $id){
    $event = Events::find($id);
    $event->event_member()->attach($user->id, ['FK_event' => $id]);
    }
    
    return redirect('#');
}
}
