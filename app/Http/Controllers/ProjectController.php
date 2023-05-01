<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Axes;
use App\Models\Member;


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
}
