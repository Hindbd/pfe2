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

// Route::get('/', function () {
//     return view('mainHome');
// });

// Route::get('/mainHome', function () {
//     return view('mainHome');
// });
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
 

Route::get('/profile',[App\Http\Controllers\ProfileController2::class, 'index']);
Route::get('/timeline',[App\Http\Controllers\TimelineController::class, 'index']);
Route::get('/calendar',[App\Http\Controllers\CalendarController::class, 'index']);
Route::get('/mailbox',[App\Http\Controllers\InboxController::class, 'index']);
Route::get('/compose',[App\Http\Controllers\ComposeController::class, 'index']);
Route::get('/read-mail',[App\Http\Controllers\readController::class, 'index']);
Route::get('/contacts',[App\Http\Controllers\ContactsController::class, 'index']);

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register');

//projects
Route::get('/project-add',[App\Http\Controllers\addProjectController::class, 'index']);
Route::post('/project-add', [App\Http\Controllers\addProjectController::class, 'store'])->name('project-add');

Route::get('/project-detail',[App\Http\Controllers\addProjectController::class, 'index']);
Route::get('/project-edit',[App\Http\Controllers\addProjectController::class, 'index3']);
Route::get('/projects',[App\Http\Controllers\projectsController::class, 'index']);

//equipes
Route::get('/teams',[App\Http\Controllers\TeamsController::class, 'index']);
Route::get('/team-add',[App\Http\Controllers\TeamsController::class, 'index2']);

//axes
Route::get('/add-axe',[App\Http\Controllers\TeamsController::class, 'index3']);
Route::post('/add-axe',[App\Http\Controllers\TeamsController::class, 'storeAxe'])->name('axe-add');
Route::get('/axes',[App\Http\Controllers\TeamsController::class, 'index4']);

//events
Route::get('/event-add',[App\Http\Controllers\TeamsController::class, 'indexEvent']);




