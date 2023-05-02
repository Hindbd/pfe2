<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\member;
use App\Models\partenaire;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Logger\ConsoleLogger;

class RegisterController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $profs = DB::table('users')
            ->where('role', '=', '1')
            ->get();
        return view('auth.register',['profs'=>$profs]);

    }
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'prenom' => ['required', 'string', 'max:255'],
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'role' => ['required', 'string', 'max:255'],
    //         // 'encadrant' =>['nullable', 'string', 'max:255'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         // 'img'=>['nullable', 'string', 'max:255'],

    //     ]);

    //     $user = User::create([
    //         'prenom' => $request->prenom,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'role'=>$request->role,
    //         'encadrant'=>$request->encadrant,
    //         'password' => Hash::make($request->password),
    //         'img' => $request->img,
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     // return redirect(RouteServiceProvider::HOME);
    //     return redirect('mainHome');
    // }
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'prenom' => ['required', 'string', 'max:255'],
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'role' => ['required', 'string', 'max:255'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'prenom' => $request->prenom,
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'password' => Hash::make($request->password),
    ]);
    // dd($user);
    if ($request->role == 1 ) {
        $member = member::create([
            'id' => $user->id,
            
        ]);
    
    }
    elseif ($request->role == 2 ) {
        $member = member::create([
            'id' => $user->id,
            'encadrant' => $request->encadrant,
        ]);
    }
    
    elseif ($request->role == 3) {
        $partenaire = Partenaire::create([
            'id' => $user->id,
            'adresse' => $request->adresse,
            'description' => $request->description,
            'domain_activite' => $request->domain,
        ]);
    }

    event(new Registered($user));
    Auth::login($user);

    return redirect('mainHome');
}

}