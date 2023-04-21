<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class addProjectController extends Controller
{
    public function index(){
        // $user = DB::table('user');
        // $users=User::all();
        $users = DB::table('users')
        ->where('role', '=', 'Enseignant')
        ->orWhere('role', '=', 'Doctorant')
        ->get();
        return view('project-add',['users'=>$users]);
}
public function store(Request $request): RedirectResponse
{
    $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string', 'max:255'],
        'date_debut'=>['required', 'date'],
        'date_fin'=>['required', 'date'],
    ]);

    $prj = Project::create([
        'nom' => $request->nom,
        'description' => $request->description,
        'responsable_prj'=> $request->responsable_prj,
        'date_debut'=>$request->date_debut,
        'date_fin'=>$request->date_fin
    ]);



    return redirect('index2');
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
