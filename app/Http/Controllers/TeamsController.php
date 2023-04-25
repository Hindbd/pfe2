<?php

namespace App\Http\Controllers;

use App\Models\Axes;
use Illuminate\Support\Facades\Auth;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;


class TeamsController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')
        ->where('role', '=', 'Enseignat')
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
    public function index3(){
        
        return view('axe-add');
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
public function index4(){
    // $axes = DB::table('axes');
    $axes=Axes::all();
    $user=Auth::user();
    return view('axes',['user'=>$user,'axes'=>$axes]);
}

}
