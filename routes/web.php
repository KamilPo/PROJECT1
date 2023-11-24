<?php

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });


// All Events
Route::get('/', [EventController::class, 'index']);

// Show Create Form
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/events', [EventController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->middleware('auth');

// Update Event
Route::put('/events/{event}', [EventController::class, 'update'])->middleware('auth');

// Delete Event
Route::delete('/events/{event}', [EventController::class, 'destroy'])->middleware('auth');

// Single Listing
Route::get('/events/{event}', [EventController::class, 'show']);


// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
