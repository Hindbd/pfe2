<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('mainHome');
});


Auth::routes();

Route::get('/',[App\Http\Controllers\Controller::class, 'index']);
Route::post('/',[App\Http\Controllers\Controller::class, 'storeContact'])->name('contact');
// Route::get('/',[App\Http\Controllers\Controller::class, 'create'])->name('contact');
Route::get('/mainHome',[App\Http\Controllers\Controller::class, 'index']);
Route::get('/home',[App\Http\Controllers\Controller::class, 'index']);
// Route::get('/adminDashboard' , [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profDashboard' , [App\Http\Controllers\profDashController::class, 'index']);
Route::get('/doctorantDashboard' , [App\Http\Controllers\docDashController::class, 'index']);
Route::get('/partenaireDashboard' , [App\Http\Controllers\partDashController::class, 'index']);
// Route::get('/home',[App\Http\Controllers\dashboardController::class, 'index'])->name('home');
// Route::get('/dashboard',[App\Http\Controllers\dashController::class, 'index']);

// roles 
 Route::middleware('auth')->group(function () {

     Route::middleware('admin')->group(function () {
         Route::get('/adminDashboard', [App\Http\Controllers\dashController::class, 'index']);
      });
     Route::middleware('Enseignant')->group(function () {
         Route::get('/profDashboard', [App\Http\Controllers\dashController::class, 'index2']);
     });
     Route::middleware('Doctorant')->group(function () {
         Route::get('/doctorantDashboard', [App\Http\Controllers\dashController::class, 'index3']);
     });
     Route::middleware('Partenaire')->group(function () {
         Route::get('/partenaireDashboard', [App\Http\Controllers\dashController::class, 'index4']);
    });
 });
 
//profile 
Route::get('/profile',[App\Http\Controllers\ProfileController2::class, 'index']);
Route::post('/profile',[App\Http\Controllers\ProfileController2::class, 'edit'])->name('editprofile');

Route::get('/timeline',[App\Http\Controllers\TimelineController::class, 'index']);
// Route::get('/calendar',[App\Http\Controllers\CalendarController::class, 'index']);
Route::get('/mailbox',[App\Http\Controllers\InboxController::class, 'index']);
// Route::get('/compose',[App\Http\Controllers\ComposeController::class, 'index']);
// Route::get('/read-mail',[App\Http\Controllers\readController::class, 'index']);
Route::get('/contacts',[App\Http\Controllers\ContactsController::class, 'index']);

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register');

//projects
Route::get('/project-add',[App\Http\Controllers\ProjectController::class, 'index']);
Route::post('/project-add', [App\Http\Controllers\ProjectController::class, 'store'])->name('project-add');
Route::get('/project-detail',[App\Http\Controllers\ProjectController::class, 'index2']);
// Route::get('/project-detail',[App\Http\Controllers\ProjectController::class, 'show'])->name('details');
Route::get('/project-edit',[App\Http\Controllers\ProjectController::class, 'index3']);
Route::get('/projects',[App\Http\Controllers\ProjectController::class, 'indexShow']);
Route::get('/propose',[App\Http\Controllers\ProjectController::class, 'propose']);
Route::post('/propose',[App\Http\Controllers\ProjectController::class, 'proposeprj'])->name('project-propose');

Route::get('/apply',[App\Http\Controllers\ProjectController::class, 'apply']);
Route::post('/apply',[App\Http\Controllers\ProjectController::class, 'applyprj'])->name('project-apply');

//equipes
Route::get('/team-add',[App\Http\Controllers\TeamsController::class, 'indexEquipe']);
Route::post('/team-add',[App\Http\Controllers\TeamsController::class, 'storeequipe'])->name('add-equipe');
Route::get('/teams',[App\Http\Controllers\TeamsController::class, 'indexTeams']);

//axes
Route::get('/add-axe',[App\Http\Controllers\TeamsController::class, 'indexAxeAdd']);
Route::post('/add-axe',[App\Http\Controllers\TeamsController::class, 'storeAxe'])->name('axe-add');
Route::get('/axes',[App\Http\Controllers\TeamsController::class, 'indexAxeShow']);
//events
Route::get('/event-add',[App\Http\Controllers\TeamsController::class, 'indexEventAdd']);
Route::post('/event-add',[App\Http\Controllers\TeamsController::class, 'storeEvent'])->name('event-add');
Route::get('/events',[App\Http\Controllers\TeamsController::class, 'indexEventShow']);
Route::get('/event-signup',[App\Http\Controllers\ProjectController::class, 'signup']);
Route::post('/event-signup',[App\Http\Controllers\ProjectController::class, 'signupevent'])->name('event-signup');




//pubs
Route::get('/pubs-add',[App\Http\Controllers\TeamsController::class, 'indexPubs']);
Route::post('/pubs-add',[App\Http\Controllers\TeamsController::class, 'publish'])->name('pubs-add');


//portfolio
Route::get('/portfolio',[App\Http\Controllers\portfolioController::class, 'index']);
