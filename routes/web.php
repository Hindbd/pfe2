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

Route::get('/', function () {
    return view('mainHome');
});

Route::get('/mainHome', function () {
    return view('mainHome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\dashboardController::class, 'index'])->name('home');
Route::get('/profile',[App\Http\Controllers\ProfileController2::class, 'index']);
Route::get('/timeline',[App\Http\Controllers\TimelineController::class, 'index']);
Route::get('/calendar',[App\Http\Controllers\CalendarController::class, 'index']);
Route::get('/gallery',[App\Http\Controllers\galleryController::class, 'index']);
Route::get('/kanban',[App\Http\Controllers\kanbanController::class, 'index']);
Route::get('/mailbox',[App\Http\Controllers\InboxController::class, 'index']);
Route::get('/compose',[App\Http\Controllers\ComposeController::class, 'index']);
Route::get('/read-mail',[App\Http\Controllers\readController::class, 'index']);
Route::get('/contacts',[App\Http\Controllers\ContactsController::class, 'index']);

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register');

//projects
Route::get('/project-add',[App\Http\Controllers\addProjectController::class, 'index']);
Route::post('/project-add', [App\Http\Controllers\addProjectController::class, 'store'])->name('project-ajout');

Route::get('/project-detail',[App\Http\Controllers\addProjectController::class, 'index2']);
Route::get('/project-edit',[App\Http\Controllers\addProjectController::class, 'index3']);
Route::get('/projects',[App\Http\Controllers\projectsController::class, 'index']);

//equipes
Route::get('/teams',[App\Http\Controllers\TeamsController::class, 'index']);
// Route::get('/teams',[App\Http\Controllers\team2Controller::class, 'index']);

// roles 
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/enseignant/dashboard', [EnseignantController::class, 'index'])->name('enseignant.dashboard');
    Route::get('/membre/dashboard', [MembreController::class, 'index'])->name('membre.dashboard');
});


