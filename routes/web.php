<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
Route::get('/profile',[App\Http\Controllers\ProfileController2::class, 'index']);
Route::get('/timeline',[App\Http\Controllers\TimelineController::class, 'index']);
Route::get('/calendar',[App\Http\Controllers\CalendarController::class, 'index']);
Route::get('/gallery',[App\Http\Controllers\galleryController::class, 'index']);
Route::get('/kanban',[App\Http\Controllers\kanbanController::class, 'index']);
Route::get('/mailbox',[App\Http\Controllers\InboxController::class, 'index']);
Route::get('/compose',[App\Http\Controllers\ComposeController::class, 'index']);
Route::get('/read-mail',[App\Http\Controllers\readController::class, 'index']);
Route::get('/projects',[App\Http\Controllers\projectsController::class, 'index']);
Route::get('/project-add',[App\Http\Controllers\addProjectController::class, 'index']);
Route::get('/teams',[App\Http\Controllers\TeamsController::class, 'index']);
Route::get('/contacts',[App\Http\Controllers\ContactsController::class, 'index']);
